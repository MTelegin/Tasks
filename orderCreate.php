<?
	class TMS_Posts
	{
		//public $stOrderCreate;
		public function strPostJSON()
		{
			//$res = '{"Ref_Key":"6ef4d864-df8c-11e9-80c1-d485647b9a79","Date":"2019-10-17T13:54:46","Статус":"Принят","СуммаДокумента":8481.32,"КатегорияЦен_Key":"210c9972-bfcc-11e3-b8d7-003048cf5d72","Контрагент_Key":"a61600fe-7399-11e4-b37f-003048cf5d72","Б_КомментарийПокупателя":"","Б_Телефон":"","Б_ИДПользователя":"","Б_ПокупательФИО":"","Б_СлужбаДоставки":"","Б_Почта":"","НомерЗаказаИМ":"34535435","ВесЗаказа":1560,"СдачаС":10000,"СпособДоставки":"Самовывоз","АдресДоставки":"г Екатеринбург, Тбилисский б-р, д 11, кв 9","РаспределительныйСклад_Key":"668f4b0e-485a-11e8-874b-003048cf5d73","ДопИнфДоставка":"","ИнтервалДоставки":"Т2124","ДатаДоставки":"2019-09-23T00:00:00","ГородЗаказа_Key":"ff9eef1e-1b0a-11e9-a03f-d485647b9a72","ОплатаСБонусногоСчета":0,"ТипОплаты":"ОнлайнОплата","ДоставитьБезЗвонка":true,"Организация_Key":"10821bc4-f615-11df-8d81-003048dc4e8a","ИДСберБанка":"","СлужебныйКомментарий":"","КомментарийОтмены":"","Отменен":false,"Товары":[{"Ref_Key":"6ef4d864-df8c-11e9-80c1-d485647b9a78","LineNumber":"1","Номенклатура_Key":"7f8345d7-4cdc-11e6-8c64-003048cf5d73","Количество":"7","Цена":404,"Сумма":2828,"Склад_Key":"668f4b0e-485a-11e8-874b-003048cf5d73","КатегорияЦен_Key":"00000000-0000-0000-0000-000000000000"},{"Ref_Key":"6ef4d864-df8c-11e9-80c1-d485647b9a78","LineNumber":"2","Номенклатура_Key":"7f8345e0-4cdc-11e6-8c64-003048cf5d73","Количество":"12","Цена":439,"Сумма":5215.32,"Склад_Key":"668f4b0e-485a-11e8-874b-003048cf5d73","КатегорияЦен_Key":"00000000-0000-0000-0000-000000000000"},{"Ref_Key":"6ef4d864-df8c-11e9-80c1-d485647b9a78","LineNumber":"3","Номенклатура_Key":"d431e565-1c9c-11e1-8d6c-003048dc4e8a","Количество":"1","Цена":150,"Сумма":138,"Склад_Key":"00000000-0000-0000-0000-000000000000","КатегорияЦен_Key":"00000000-0000-0000-0000-000000000000"}]}';
			
			$res = '
			{
				"Ref_Key": "6ef4d864-df8c-11e9-80c1-d485647b9a79",
				"Date": "2019-10-17T13:54:46",
				"Статус": "Принят",
				"СуммаДокумента": 8481.32,
				"КатегорияЦен_Key": "210c9972-bfcc-11e3-b8d7-003048cf5d72",
				"Контрагент_Key": "a61600fe-7399-11e4-b37f-003048cf5d72",
				"Б_КомментарийПокупателя": "",
				"Б_Телефон": "",
				"Б_ИДПользователя": "",
				"Б_ПокупательФИО": "",
				"Б_СлужбаДоставки": "",
				"Б_Почта": "",
				"НомерЗаказаИМ": "34535435",
				"ВесЗаказа": 1560,
				"СдачаС": 10000,
				"СпособДоставки": "Самовывоз",
				"АдресДоставки": "г Екатеринбург, Тбилисский б-р, д 11, кв 9",
				"РаспределительныйСклад_Key": "668f4b0e-485a-11e8-874b-003048cf5d73",
				"ДопИнфДоставка": "",
				"ИнтервалДоставки": "Т2124",
				"ДатаДоставки": "2019-09-23T00:00:00",
				"ГородЗаказа_Key": "ff9eef1e-1b0a-11e9-a03f-d485647b9a72",
				"ОплатаСБонусногоСчета": 0,
				"ТипОплаты": "ОнлайнОплата",
				"ДоставитьБезЗвонка": true,
				"Организация_Key": "10821bc4-f615-11df-8d81-003048dc4e8a",
				"ИДСберБанка": "",
				"СлужебныйКомментарий": "",
				"КомментарийОтмены": "",
				"Отменен": false,
				"Товары": [
				{
				"Ref_Key": "6ef4d864-df8c-11e9-80c1-d485647b9a78",
				"LineNumber": "1",
				"Номенклатура_Key": "7f8345d7-4cdc-11e6-8c64-003048cf5d73",
				"Количество": "7",
				"Цена": 404,
				"Сумма": 2828,
				"Склад_Key": "668f4b0e-485a-11e8-874b-003048cf5d73",
				"КатегорияЦен_Key": "00000000-0000-0000-0000-000000000000"
				},
				{
				"Ref_Key": "6ef4d864-df8c-11e9-80c1-d485647b9a78",
				"LineNumber": "2",
				"Номенклатура_Key": "7f8345e0-4cdc-11e6-8c64-003048cf5d73",
				"Количество": "12",
				"Цена": 439,
				"Сумма": 5215.32,
				"Склад_Key": "668f4b0e-485a-11e8-874b-003048cf5d73",
				"КатегорияЦен_Key": "00000000-0000-0000-0000-000000000000"
				},
				{
				"Ref_Key": "6ef4d864-df8c-11e9-80c1-d485647b9a78",
				"LineNumber": "3",
				"Номенклатура_Key": "d431e565-1c9c-11e1-8d6c-003048dc4e8a",
				"Количество": "1",
				"Цена": 150,
				"Сумма": 138,
				"Склад_Key": "00000000-0000-0000-0000-000000000000",
				"КатегорияЦен_Key": "00000000-0000-0000-0000-000000000000"
				}]}';
				
			return $res;
		}
	}
	
	class TMS_CurlWork
	{
		//public $connect = curl_init();
		
		public function setOptions($connect, $user_login, $user_pass, $headers, $url, $auth, $userAgent)
		{
			curl_setopt($connect, CURLOPT_URL, $url);
			curl_setopt($connect, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($connect, CURLOPT_FOLLOWLOCATION, true);
			
			curl_setopt($connect, CURLOPT_USERAGENT, $userAgent);
			
			curl_setopt($connect, CURLOPT_TIMEOUT, 60);
			curl_setopt($connect, CURLOPT_CONNECTTIMEOUT, 120);
			
			curl_setopt($connect, CURLOPT_LOGIN_OPTIONS, $auth);
			curl_setopt($connect, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			
			// CURLOPT_USERPWD - авторизация
			$st_connect = $user_login.":".$user_pass;
			
			curl_setopt($connect, CURLOPT_USERPWD, $st_connect);
			
			curl_setopt($connect, CURLOPT_HEADER, true);
			curl_setopt($connect, CURLOPT_POST, true);
			curl_setopt($connect, CURLOPT_HTTPHEADER, $headers);
		}
		
		public function curlCreateOrder($connect)
		{
			$tmsPosts = new TMS_Posts;
			$stCreateOrder = $tmsPosts->strPostJSON();
			
			curl_setopt($connect, CURLOPT_POSTFIELDS, $stCreateOrder);
			
			$res = curl_exec($connect);
			return $res;
		}
		
		public function errorsHandle($connect)
		{
			$curl_errno = curl_errno($connect);
			$curl_error = curl_error($connect);

			if ($curl_errno > 0)
			{
				echo "cURL Error ($curl_errno): $curl_error\n";
			}
			
			echo "curl_errno = ".(string)$curl_errno."<br>";
		}
		
		public function curlClose($connect)
		{
			curl_close($connect);
		}
	}
	
	//WEB64 V0VCOldnZXQ1NDUx - строка логин:пароль, не пригодилась
	$user_login	= "WEB";
	$user_pass	= "Wget5451";
	$headers[] 	= "Content-Type: application/json; charset=utf-8";
	$user_agent = 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0';
	
	// тут $format PHP интерпретировал по - своему
	$url  = "http://afz.soroks.ru:81/zpvd_dt//odata/standard.odata/Document_Заказ?$"."format=json";
	$auth = "AUTH=*";

	$conn = curl_init();
	$curlWork =  new TMS_CurlWork;
	// если curl инициализировался
	if ($conn)
	{
		$curlWork->setOptions($conn, $user_login, $user_pass, $headers, $url, $auth, $user_agent);
		
		$response = $curlWork->curlCreateOrder($conn);
		$curlWork->errorsHandle($conn);
		
		echo $response."<br>";
		echo "dump(response) : ";
		echo $response."<br>";
		echo "dump : "."<br>";
		dump($response);
		
		$curlWork->curlClose($conn);
	}
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
