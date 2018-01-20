# わくらばAPI仕様

## ランドマーク取得（現在地）API
### Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/get_surround.php*
### Parameters
|Name|Description|Example|
|-|-|-|
|latitude|現在地の緯度|40.5|
|longitude|現在地の軽度|40.5|
|range|取得範囲(°)|0.5|
### Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/get_surround.php?latitude=40.5&longitude=40.5&range=0.5*
### Example Response
```
{
  "landmarks":[
    {
      "id":"3",
      "lsti":40.5,
      "longi":40.5,
      "name":"金沢城",
      "tag":"3&2"
    },
    {
      "id":"19",
      "lsti":20.5,
      "longi":55.5,
      "name":"兼六園",
      "tag":"5"      
    },
    {
      "id":"30",
      "lsti":25.5,
      "longi":55.5,
      "name":"尾張神社",
      "tag":"3"      
    }
  ]
}
```


## ランドマーク取得（現在地・タグ）API
### Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/get_surround_tag.php*
### Parameters
|Name|Description|Example|
|-|-|-|
|latitude|現在地の緯度|40.5|
|longitude|現在地の軽度|40.5|
|range|取得範囲(°)|0.5|
|tag|タグ番号|3|
### Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/get_surround_tag.php?latitude=40.5&longitude=40.5&range=0.5&tag=3*
### Example Response
```
{
  "landmarks":[
    {
      "id":"3",
      "lsti":40.5,
      "longi":40.5,
      "name":"金沢城",
      "tag":"3&2"
    },
    {
      "id":"30",
      "lsti":25.5,
      "longi":55.5,
      "name":"尾張神社",
      "tag":"3"      
    }
  ]
}
```


## コメント取得（ランドマーク対応）API
### Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/get_comments.php*
### Parameters
|Name|Description|Example|
|-|-|-|
|landmark_id|ランドマークID|3|
### Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/get_comments.php?landmark_id=3*
### Example Response
```
{
  "comments":[
    {
      "landmark_id":"3",
      "tweetid":"AAAABF242HGGG11"
    },
    {
      "landmark_id":"43",
      "tweetid":"AACCFBF240BBB11"  
    }
  ]
}
```


## コメント登録（ランドマーク対応）API
### Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/resist_comments.php*
### Parameters
|Name|Description|Example|
|-|-|-|
|landmark_id|ランドマークID|3|
|tweet_id|ツイートID|AAAABF242HGGG11|
### Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/resist_comments.php?landmark_id=3&tweet_id=AAAABF242HGGG11*
### Example Response
```
{
  "comments":[
    {
      "landmark_id":"3",
      "tweetid":"AAAABF242HGGG11"
    },
    {
      "landmark_id":"43",
      "tweetid":"AACCFBF240BBB11"  
    }
  ]
}
```
