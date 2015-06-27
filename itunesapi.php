<?php
/**
* lookup media via the iTunes API
*
* The Apples search API is documented here https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html
*
* @author Dave Barnwell <dave@freshsauce.co.uk>
*/
class iTunesAPI
{
  
  private function __construct() {
    # code...
  }
  
  /**
   * search for a song and return a result object or raw json if specified via options
   *
   * @param string $find 
   * @param string $options 
   * @return object or JSON string if specified in options
   */
  public static function search($find, $options = null) { // search music in english
    $defaultOptions = array(
      'max'     => 5, // max results to return
      'country' => 'GB', // country code of store to search
      'entity'  => 'song', // what to search for 
      'media'   => 'music',
      'json'    => false
    );
    if (!is_array($options)) {
      $options = array();
    }
    $optionsToUse = array_merge($defaultOptions, $options);
    $raw = self::getData(
      'https://itunes.apple.com/search?media='.$optionsToUse['media'].
      '&entity='.$optionsToUse['entity'].
      '&country='.$optionsToUse['country'].
      '&limit='.$optionsToUse['max'].
      '&term='.urlencode($find)
    );
    return $optionsToUse['json'] ? $raw : json_decode($raw);
  }
  
  public static function minimalSearch($find, $options = null) { // search and return first matching result else false
    $results = self::search($find, $options);
    if ($results && $results->resultCount > 0) {
      return $results->results[0];
    }
    return false;
  }

  // returns content from the specified URL

  /**
   * @param string $url
   */
  private static function getData($url) {
    $ch = curl_init($url);
    curl_setopt_array(
      $ch,
      array(
        CURLOPT_HEADER => false,
        CURLOPT_POST => false,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1)'
      )
    );
    $output = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $redirectUrl = ($http_code == 302) ? curl_getinfo($ch, CURLINFO_EFFECTIVE_URL) : null;
    $error_no = curl_errno($ch);
    if ($error_no != 0) {
      throw new \Exception(__METHOD__.':Data fetch failed curl error:'.$error_no);
    }
    if ($http_code != 200) {
      throw new \Exception(__METHOD__.':Data fetch failed http code:'.$http_code.(($redirectUrl) ? ', redirect: '.$redirectUrl : ''));
    }
    curl_close($ch);
    return $output;
  }
}
