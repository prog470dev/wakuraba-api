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
