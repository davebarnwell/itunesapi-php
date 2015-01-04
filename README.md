itunesapi-php
=============

  lookup media via the iTunes API, by default it'll look up music by song
  
  It's worth cache the results of seacrhes as the iTunes API can be slow
  
  The Apples search API is documented here https://www.apple.com/itunes/affiliates/resources/documentation/itunes-store-web-service-search-api.html


usage
=====

    $results = iTunesAPI::search('One By One, Foo Fighters');
    
    if ($results && $results->resultCount) {
      foreach($results->results as $song) {
        echo $song->artistName.'...etc';
      }
    }
    
    var_dump($results);
    
    
    object(stdClass)#1 (2) {
      ["resultCount"]=>
      int(5)
      ["results"]=>
      array(5) {
        [0]=>
        object(stdClass)#2 (32) {
          ["wrapperType"]=>
          string(5) "track"
          ["kind"]=>
          string(4) "song"
          ["artistId"]=>
          int(6906197)
          ["collectionId"]=>
          int(439648042)
          ["trackId"]=>
          int(439648073)
          ["artistName"]=>
          string(12) "Foo Fighters"
          ["collectionName"]=>
          string(37) "The Best of BBC Radio 1's Live Lounge"
          ["trackName"]=>
          string(16) "Times Like These"
          ["collectionCensoredName"]=>
          string(37) "The Best of BBC Radio 1's Live Lounge"
          ["trackCensoredName"]=>
          string(16) "Times Like These"
          ["collectionArtistId"]=>
          int(58631709)
          ["collectionArtistName"]=>
          string(33) "Various Artists & Various Artists"
          ["artistViewUrl"]=>
          string(62) "https://itunes.apple.com/gb/artist/foo-fighters/id6906197?uo=4"
          ["collectionViewUrl"]=>
          string(79) "https://itunes.apple.com/gb/album/times-like-these/id439648042?i=439648073&uo=4"
          ["trackViewUrl"]=>
          string(79) "https://itunes.apple.com/gb/album/times-like-these/id439648042?i=439648073&uo=4"
          ["previewUrl"]=>
          string(79) "http://a916.phobos.apple.com/us/r1000/107/Music/0e/fd/82/mzm.ggridbkj.aac.p.m4a"
          ["artworkUrl30"]=>
          string(70) "http://a1.mzstatic.com/us/r30/Music/db/0e/62/mzi.bqaqbban.30x30-50.jpg"
          ["artworkUrl60"]=>
          string(70) "http://a5.mzstatic.com/us/r30/Music/db/0e/62/mzi.bqaqbban.60x60-50.jpg"
          ["artworkUrl100"]=>
          string(72) "http://a2.mzstatic.com/us/r30/Music/db/0e/62/mzi.bqaqbban.100x100-75.jpg"
          ["collectionPrice"]=>
          float(10.99)
          ["trackPrice"]=>
          float(-1)
          ["releaseDate"]=>
          string(20) "2011-06-03T07:00:00Z"
          ["collectionExplicitness"]=>
          string(11) "notExplicit"
          ["trackExplicitness"]=>
          string(11) "notExplicit"
          ["discCount"]=>
          int(2)
          ["discNumber"]=>
          int(2)
          ["trackCount"]=>
          int(20)
          ["trackNumber"]=>
          int(1)
          ["trackTimeMillis"]=>
          int(205853)
          ["country"]=>
          string(3) "GBR"
          ["currency"]=>
          string(3) "GBP"
          ["primaryGenreName"]=>
          string(3) "Pop"
        }
        [1]=>
        object(stdClass)#3 (30) {
          ["wrapperType"]=>
          string(5) "track"
          ["kind"]=>
          string(4) "song"
          ["artistId"]=>
          int(6906197)
          ["collectionId"]=>
          int(250494531)
          ["trackId"]=>
          int(250494545)
          ["artistName"]=>
          string(12) "Foo Fighters"
          ["collectionName"]=>
          string(10) "One By One"
          ["trackName"]=>
          string(16) "Times Like These"
          ["collectionCensoredName"]=>
          string(10) "One By One"
          ["trackCensoredName"]=>
          string(16) "Times Like These"
          ["artistViewUrl"]=>
          string(62) "https://itunes.apple.com/gb/artist/foo-fighters/id6906197?uo=4"
          ["collectionViewUrl"]=>
          string(79) "https://itunes.apple.com/gb/album/times-like-these/id250494531?i=250494545&uo=4"
          ["trackViewUrl"]=>
          string(79) "https://itunes.apple.com/gb/album/times-like-these/id250494531?i=250494545&uo=4"
          ["previewUrl"]=>
          string(80) "http://a1728.phobos.apple.com/us/r1000/096/Music/40/90/36/mzm.rkprmcxy.aac.p.m4a"
          ["artworkUrl30"]=>
          string(70) "http://a4.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.30x30-50.jpg"
          ["artworkUrl60"]=>
          string(70) "http://a3.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.60x60-50.jpg"
          ["artworkUrl100"]=>
          string(72) "http://a5.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.100x100-75.jpg"
          ["collectionPrice"]=>
          float(4.99)
          ["trackPrice"]=>
          float(0.99)
          ["releaseDate"]=>
          string(20) "2003-03-25T08:00:00Z"
          ["collectionExplicitness"]=>
          string(11) "notExplicit"
          ["trackExplicitness"]=>
          string(11) "notExplicit"
          ["discCount"]=>
          int(1)
          ["discNumber"]=>
          int(1)
          ["trackCount"]=>
          int(11)
          ["trackNumber"]=>
          int(4)
          ["trackTimeMillis"]=>
          int(265640)
          ["country"]=>
          string(3) "GBR"
          ["currency"]=>
          string(3) "GBP"
          ["primaryGenreName"]=>
          string(4) "Rock"
        }
        [2]=>
        object(stdClass)#4 (30) {
          ["wrapperType"]=>
          string(5) "track"
          ["kind"]=>
          string(4) "song"
          ["artistId"]=>
          int(6906197)
          ["collectionId"]=>
          int(250494531)
          ["trackId"]=>
          int(250494534)
          ["artistName"]=>
          string(12) "Foo Fighters"
          ["collectionName"]=>
          string(10) "One By One"
          ["trackName"]=>
          string(11) "All My Life"
          ["collectionCensoredName"]=>
          string(10) "One By One"
          ["trackCensoredName"]=>
          string(11) "All My Life"
          ["artistViewUrl"]=>
          string(62) "https://itunes.apple.com/gb/artist/foo-fighters/id6906197?uo=4"
          ["collectionViewUrl"]=>
          string(74) "https://itunes.apple.com/gb/album/all-my-life/id250494531?i=250494534&uo=4"
          ["trackViewUrl"]=>
          string(74) "https://itunes.apple.com/gb/album/all-my-life/id250494531?i=250494534&uo=4"
          ["previewUrl"]=>
          string(80) "http://a1983.phobos.apple.com/us/r1000/080/Music/72/6f/83/mzm.xthmtyft.aac.p.m4a"
          ["artworkUrl30"]=>
          string(70) "http://a4.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.30x30-50.jpg"
          ["artworkUrl60"]=>
          string(70) "http://a3.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.60x60-50.jpg"
          ["artworkUrl100"]=>
          string(72) "http://a5.mzstatic.com/us/r30/Music/f6/71/6b/mzi.ajxvsyhq.100x100-75.jpg"
          ["collectionPrice"]=>
          float(4.99)
          ["trackPrice"]=>
          float(0.99)
          ["releaseDate"]=>
          string(20) "2003-03-25T08:00:00Z"
          ["collectionExplicitness"]=>
          string(11) "notExplicit"
          ["trackExplicitness"]=>
          string(11) "notExplicit"
          ["discCount"]=>
          int(1)
          ["discNumber"]=>
          int(1)
          ["trackCount"]=>
          int(11)
          ["trackNumber"]=>
          int(1)
          ["trackTimeMillis"]=>
          int(262733)
          ["country"]=>
          string(3) "GBR"
          ["currency"]=>
          string(3) "GBP"
          ["primaryGenreName"]=>
          string(4) "Rock"
        }
        [3]=>
        object(stdClass)#5 (32) {
          ["wrapperType"]=>
          string(5) "track"
          ["kind"]=>
          string(4) "song"
          ["artistId"]=>
          int(6906197)
          ["collectionId"]=>
          int(293940098)
          ["trackId"]=>
          int(293940360)
          ["artistName"]=>
          string(12) "Foo Fighters"
          ["collectionName"]=>
          string(29) "Radio 1's Live Lounge, Vol. 3"
          ["trackName"]=>
          string(27) "Keep the Car Running (Live)"
          ["collectionCensoredName"]=>
          string(29) "Radio 1's Live Lounge, Vol. 3"
          ["trackCensoredName"]=>
          string(27) "Keep the Car Running (Live)"
          ["collectionArtistId"]=>
          int(825559)
          ["collectionArtistName"]=>
          string(15) "Various Artists"
          ["artistViewUrl"]=>
          string(62) "https://itunes.apple.com/gb/artist/foo-fighters/id6906197?uo=4"
          ["collectionViewUrl"]=>
          string(88) "https://itunes.apple.com/gb/album/keep-the-car-running-live/id293940098?i=293940360&uo=4"
          ["trackViewUrl"]=>
          string(88) "https://itunes.apple.com/gb/album/keep-the-car-running-live/id293940098?i=293940360&uo=4"
          ["previewUrl"]=>
          string(79) "http://a739.phobos.apple.com/us/r1000/102/Music/fe/66/b3/mzm.mvobwodg.aac.p.m4a"
          ["artworkUrl30"]=>
          string(70) "http://a2.mzstatic.com/us/r30/Music/93/fc/1d/mzi.lahdvvbf.30x30-50.jpg"
          ["artworkUrl60"]=>
          string(70) "http://a1.mzstatic.com/us/r30/Music/93/fc/1d/mzi.lahdvvbf.60x60-50.jpg"
          ["artworkUrl100"]=>
          string(72) "http://a2.mzstatic.com/us/r30/Music/93/fc/1d/mzi.lahdvvbf.100x100-75.jpg"
          ["collectionPrice"]=>
          float(10.99)
          ["trackPrice"]=>
          float(-1)
          ["releaseDate"]=>
          string(20) "2008-10-10T07:00:00Z"
          ["collectionExplicitness"]=>
          string(11) "notExplicit"
          ["trackExplicitness"]=>
          string(11) "notExplicit"
          ["discCount"]=>
          int(2)
          ["discNumber"]=>
          int(1)
          ["trackCount"]=>
          int(20)
          ["trackNumber"]=>
          int(20)
          ["trackTimeMillis"]=>
          int(200573)
          ["country"]=>
          string(3) "GBR"
          ["currency"]=>
          string(3) "GBP"
          ["primaryGenreName"]=>
          string(3) "Pop"
        }
        [4]=>
        object(stdClass)#6 (32) {
          ["wrapperType"]=>
          string(5) "track"
          ["kind"]=>
          string(4) "song"
          ["artistId"]=>
          int(6906197)
          ["collectionId"]=>
          int(323892897)
          ["trackId"]=>
          int(323892956)
          ["artistName"]=>
          string(12) "Foo Fighters"
          ["collectionName"]=>
          string(29) "Radio 1's Live Lounge, Vol. 2"
          ["trackName"]=>
          string(23) "Times Like These (Live)"
          ["collectionCensoredName"]=>
          string(29) "Radio 1's Live Lounge, Vol. 2"
          ["trackCensoredName"]=>
          string(23) "Times Like These (Live)"
          ["collectionArtistId"]=>
          int(168231993)
          ["collectionArtistName"]=>
          string(15) "Various Artists"
          ["artistViewUrl"]=>
          string(62) "https://itunes.apple.com/gb/artist/foo-fighters/id6906197?uo=4"
          ["collectionViewUrl"]=>
          string(84) "https://itunes.apple.com/gb/album/times-like-these-live/id323892897?i=323892956&uo=4"
          ["trackViewUrl"]=>
          string(84) "https://itunes.apple.com/gb/album/times-like-these-live/id323892897?i=323892956&uo=4"
          ["previewUrl"]=>
          string(80) "http://a1970.phobos.apple.com/us/r1000/111/Music/90/86/fc/mzm.vwjiyutv.aac.p.m4a"
          ["artworkUrl30"]=>
          string(70) "http://a3.mzstatic.com/us/r30/Music/eb/be/4c/mzi.czsbrqnw.30x30-50.jpg"
          ["artworkUrl60"]=>
          string(70) "http://a2.mzstatic.com/us/r30/Music/eb/be/4c/mzi.czsbrqnw.60x60-50.jpg"
          ["artworkUrl100"]=>
          string(72) "http://a4.mzstatic.com/us/r30/Music/eb/be/4c/mzi.czsbrqnw.100x100-75.jpg"
          ["collectionPrice"]=>
          float(10.99)
          ["trackPrice"]=>
          float(-1)
          ["releaseDate"]=>
          string(20) "2009-11-27T08:00:00Z"
          ["collectionExplicitness"]=>
          string(11) "notExplicit"
          ["trackExplicitness"]=>
          string(11) "notExplicit"
          ["discCount"]=>
          int(2)
          ["discNumber"]=>
          int(1)
          ["trackCount"]=>
          int(20)
          ["trackNumber"]=>
          int(1)
          ["trackTimeMillis"]=>
          int(205082)
          ["country"]=>
          string(3) "GBR"
          ["currency"]=>
          string(3) "GBP"
          ["primaryGenreName"]=>
          string(3) "Pop"
        }
      }
    }