	
  # Test Driven Development ve Behaviour Driven Development arasındaki farkılar nedir ? 
  -  Test odaklı geliştirme tipik olarak belirli bir işlevsellik parçası için bir test yazmayı, başarısız olduğunu görmek için testi çalıştırmayı ve ardından testi geçmek için kodu yazmayı içerir. 
  -  Davranış Odaklı Geliştirmedir. Bu, özellik mevcut olmadığı için başarısız olan yürütülebilir bir belirtim oluşturmak ve ardından belirtimi geçebilecek en basit kodu yazmak anlamına gelir

  # Unit Test nedir? Unit Test nasıl yapılır?
  - Unit test uygulamamızın küçük bir parçasını uygulamanın geri kalanından bağımsız bir şekilde çalıştırarak bu parçanın davranışını doğrulayan bir metoddur.
Unit test yazdığımız kodun davranışını yine kod yazarak doğrulamamızı sağlar. 
  -  Kodda değişiklik yaptığımızda, Unit Testi çalıştırıp oluşturduğumuz algoritmaya uygun bir şekilde çalışıp çalışmadığını kolaylıkla test edebiliriz. Unit Test’ ler tüm hataları ortaya çıkarmaz, çünkü her parça izole şekilde test edilmekte ve entegrasyon yapıldığında herşeyin düzenli çalışacağı anlamına gelmez.
  
  -  Bazı Unit Test Framework’ leri

	Robot Framework
	JUnit
	Spock

- Geliştireceğimiz yazılımları yazmadan önce Unit Test’ lerini yazmamız gerekiyor ve Unit Test yazmak için de bazı kurallara uymamız gerekiyor.

		En küçük parçacığı test edilmeli
		Sadece bir senaryo test edilir.
		Kullanılan adımlar belirlenir.
 		Test method ismi test edilen senaryonun yansıması olmalıdır.
 		Test edilen kısım diğer kısımlardan bağımsız olmalıdır.
		Testlerimiz tam otomatik şekilde çalışmalıdır.
		Hızlı çalışabilmeli ve çabuk sonuçlar vermelidir.
 		Okunaklı, anlaşılabilir ve sürdürebilir olmalıdır.
 		Test başarısız olduğunda durmalı ve iyi bir hata raporu döndürmelidir. Bu hata raporunda neyi test ettin ? ne yapmalı ? beklenen çıktı neydi ve gerçekte ne yaptığıdır ?
	
	
	# Uygulama Linkleri
		
		Console Uygulaması için php bin/console app:findNumber
		
		Controller için {localhost}/login email =umut@gmail.com şifre=123 bilgileri  {localhost}/panelde response dönücek.
	
