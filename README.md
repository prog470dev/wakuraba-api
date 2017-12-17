# テキスト登録API
## Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/regist.php*
## Parameters
|Name|Description|Example|
|-|-|-|
|lati|現在地の緯度|40.5|
|longi|現在地の軽度|40.5|
|text|表示するテキスト|Hello|
## Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/regist.php?lati=40.5&longi=40.5&text=Hello*
## Example Response

# 周辺コメント取得API
## Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/around.php*
## Parameters
|Name|Description|Example|
|-|-|-|
|lati|現在地の緯度|40.5|
|longi|現在地の軽度|40.5|
|range|取得範囲(°)|5.0|
## Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/around.php?lati=40.5&longi=40.5&range=5.0*
## Example Response
```
{
  "comments":[
    {
      "lsti":40.5,
      "longi":40.5,
      "text":"Hello":
    },
    {
      "lsti":20.5,
      "longi":55.5,
      "text":"foo bar"
    }
  ]
}
```

# テーブル一覧表示
## Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/showlist.php*

/* 長方形の２ポイントよりも「中心座標」を登録させるほうが便利か？ */
# 空間情報登録API
## Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/registSpace.php*
## Parameters
|Name|Description|Example|
|-|-|-|
|id|登録空間のID|36|
|name|登録空間の名前|金沢城|
|lati1|登録空間の緯度１|40.5|
|long1i登録空間の軽度１|40.5|
|lati2|登録空間の緯度２|40.5|
|long2i登録空間の軽度２|40.5|
## Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/registSpace.php?id=36&name="金沢城"&lati1=40.5&longi1=40.5&lati2=40.5&longi2=40.5
## Example Response

# 空間情報取得API
## Resource URL
*http://homesec.s17.xrea.com/wakuraba-api/aroundSpace.php*
## Parameters
|Name|Description|Example|
|-|-|-|
|lati|現在地の緯度|40.5|
|longi|現在地の軽度|40.5|
|range|取得範囲(°)|5.0|
## Example Request
GET *http://homesec.s17.xrea.com/wakuraba-api/aroundSpace.php?lati=40.5&longi=40.5&range=5.0*
## Example Response
```
{
    "comments":[
        {
            "id":36,
            "name":"金沢城",
            "lsti1":40.5,
            "longi1":40.5,
            "lsti2":40.5,
            "longi2":40.5,
            },
            {
            "id":36,
            "name":"金沢城",
            "lsti1":40.5,
            "longi1":40.5,
            "lsti2":40.5,
            "longi2":40.5,
        }
    ]
}
```
