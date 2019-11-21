# PHP - Hypertext Preprocessor

🧠 Nice to know:

- PHP erzeugt benötigten HTML-Code während der Laufzeit des Webprogramms. 
  Daher wird PHP als dynamisch bezeichnet.
- objektorientierte Merkmale gab es erstmals in php4
- objektorientierte Entwicklung seit php5 möglich
- php ist ohne html nicht möglich
- [100 Interview Questions](https://www.guru99.com/php-interview-questions-answers.html)
- [Wikibook - php ](https://de.wikibooks.org/wiki/Websiteentwicklung:_PHP)

## Setup (Windows) => apache server or other requierd!

#### Download latest version
- Download: [latest version => thread safe](https://www.php.net/downloads.php)
- [ ] extract zip and move to c:
- [ ] rename php.ini-development to php.ini
- [ ] edit enviroment variables: Path => C:/php
- [ ] open command prompt and type: php -version
- [ ] open the file c:\Apache24\conf\httpd.conf and append it with lines:
	- PHPIniDir "C:/php7"
	- AddHandler application/x-httpd-php .php
	- LoadModule php7_module "C:/php7/php7apache2_4.dll"
- [ ] now restart apache server
- [ ] create file "info.php" in C:/Apache34/htdocs/
- [ ] open file and write and save: <?php phpinfo() ?> 
- [ ] now browse for: localhost/info.php


## Integration
- SAPI-Modul: direkte Verbindung (jedoch nicht für alle Webserver verfügbar)
- CGI: Common Gateway Interface (integration von php auf nahezu allen Webservern)

## Anbindung/Kennzeichnung
- Dateiendung => .php
- <\?php ... ?>
- <script language="php"> ... </script>
- <\? \?> (seit php 5 nicht mehr verfügbar)
- <% %> (seit php 5 nicht mehr verfügbar)

## Sprachmerkmal
- Kommentare => #, //, /**/
- Abschluss Anweisung => ;
- Nummerische Literale => 0x, 0X;
- String-Literale )> ", '
- Funktionsname sind nicht case-sensetive
- Variablennamen beginnen mit $ gefolgt von Buchstaben oder Unterstrich => $menge, $Menge, $_Menge

## Datentypen
- Wahrheitswert:        bool => true or false
- Ganzzahl:             integer => 23 oder -42
- Gleitkommazahl        double => 19.96 oder -220.4
- Zeichenkette          string => "Schlumpf" oder 'Schlumpf'
- Array                 array => ("Frankfurt", "Berlin", "München")
- Ressource             resource => verweis auf eine Ressource wie z.b. ein Bild
- Objekt                object => wird in der oop einer Klasseninstanz zugeordnet

## Schlüsselwörter
	abstract     | and        | array()
	as 	     | break      | case
	catch 	     | cfuntion   | class
	clone 	     | const      | continue
	declare      | default    | do
	else 	     | elseif     | enddeclare
	endfor 	     | endforeach | endif
	endswitch    | endwhile   | extends
	final        | for        | foreach
	funtion      | global     | goto
	if           | implements | interface
	instanceof   | namespace  | new
	old_function | or	  | private
	protected    | public     | static
	switch       | throw      | try
	use	     | var	  | while

## Basis Konzept OOP
	Kapselung	    | Eigenschaften, Methoden und Ereignisse eines realen Objektes werden zu Klassen zusammengefasst.
			      Konkrete Ausprägungen einer Klasse sind Objekte
				  
	Geheimnisprinzip    | Von außen erreicht man nur die Informationen, die zur Anwendung notwendig sind. 
			      Ein Beispiel: Objekte der Klasse Auto verfügen über die Methode Bremsen.
			      Für einen Benutzer ist es nicht von Interesse wie der Bremsvorgang umgesetzt wurde.
			      
	Sichtbarkeit	    | Klassen und ihre Eigenschaften und Methoden könnnen unterschiedliche Sichtbarkeiten aufweisen.
			      Damit wird angegeben, welche Elemente eines Objekts für ander Ojekte sichtbar sind.
			      Die beiden Extreme lauten: private (das Element ist nur innerhalb der Klasse sichtbar)
			      public  (das Element ist für alle anderen Objekte sichtbar)
			      
	Vererbung	    | Mithilfe der Vererbung können Eigenschaften und Methoden einer übergeordneten Klasse auf
			      nachgelagerte Klassen vererbt werden. Die Zuordnungen zu Ober- und Unterklassen folgen
			      dabei den Prizipien von Generalisierung und Spezialisierung
			      
	Polymorphie	    | Objekte verschiedener Klassen müssen gelegentlich gleiche Funktionen ausführen. 
			      Beispielsweise müssen alle motorgetriebenen Fahrzeug betankt werden. Dazu wird in der abstrakten
			      Klasse "Fahrzeug" die Methode "Tanken" definiert. Von abstrakten Klassen können keine Objekte
			      erzeugt werden. Sie dienen nur als Platzhalter gemeinsamer Eigenschaften.
			      In den Unterklassen "PKW" und "LKW" muss jeweils die Methode "Tanken" konkretisierend definiert werden.
			      D.h. ein PKW wird mittels Benzin und ein LKW mittel Diesel betankt.

## OOP - PHP
- Zugriffskontrolle: public, private, protected
- Objektübergabe an Funktion als Referenz oder als Wert mit "clone()"
- Wertübergabe an Funktion als Kopie
- Konstuktor: __construct()
- Destruktor: __destruct() => freigabe von Ressourcen (php hat seit 5.3 Garbage Collection)
- Vererbung
- Serialisierung
- _get()
- _set()
- Interfaces
- Abstrakte Klassen
- Iteratoren
- Klassen sind per standard "public"
- Methodenüberlagerungen nicht direkt möglich => aber durch setzen eines Wertes des Funktionalen Parameters möglich => methodenName($parameter = 1)

## Sichtbarkeiten

- public
	- wird vererbt
	- kann jederzeit vom objekt aufgerufen werden, obleich vater- oder kind klasse
- protected
	- wird vererbt
	- kann NICHT direkt vom Objekt aufgerufen werden
	- Zugriff über Hilfsmethoden (getter, setter)
- private
	- wird NICHT vererbt
	- Zugriff kann nur innerhalb der Klasse erfolgen, nicht vom Objekt selbst

## Statische Eigenschaften
- werden mit static deklariert
- werden mit dem scope resolution operator (::) aufgerufen
- um statische eigenschaften von constanten trennen zu können ist das $-zeichen notwendig => Klasse::$statische_eigenschaft
- statische Eigenschaften ähneln globalen Variablen
- sind unabhängig vom Objekt
- sind zugreifbar nach der deklaration der Klasse	
- werden innerhalb der klasse mit => self::$statische_eigenschaft, aufgerufen
- werden auserhalb der Klasse mit dem Klassenname aufgerufen => Klasse::$statische_eigenschaft
- sind veränderbar
- wird eine statische Variable geändert trifft dies auf alle instanzierten Objekte der Klasse zu


## Operatoren:
```
	+ | - | * | / | % | >= | <= | == | != | <>
```

## Bedingte Anweisungen

```
if($x > 10) {
	  # ...
	}elseif ($x < 10){
	  # ...
	}else{
	  # ...
	}

	##########################

	# case => integer, char, string, float

	switch ($x) {
	  case Wert0:
	       # ...
	       break;
	 case Wertn:
	      # ...
	      break;
	 default:
	      # ...
	}

	#########################
	
	for($i = 0: $i < 10; $i++){
	   # ...
	}

	#########################
	
	foreach($array as $key => $value){
	   # ...
	}

	or

	foreach($array as $value){
	   # ...
	}

	#########################
	
	reset($array)
	while(list($key, $value) = each($array)){
	  # ...
	}
```

- reset => set the internal pointer of an array to its first element
- list => assign variables as if they were an array
- each => return the current key and value pair from an array and advance the array cursor

## Formulare

```
	<form action=".." enctype=".." method="..">
	 <input type="text>
		name="Name"
		value="Wert"
		size="Länge"
		maxlength="Maximallänge"
	</form>
```

#### Form-Attribute
- action => Angabe der Webseite an welche die Formulardaten verschickt werden
- enctype => versenden von Dateien => daher Angabe des Kodierungstyps
- method => 
		GET: Formulardaten werden an url angehangen (länge durch browser begrenzt, kein file-upload möglich)
		POST: Formulardaten werden in Name-Wert-Paare umgewandelt und im body versendet
	
#### Input-Attribute:
- type => button, checkbox, color, date, datetime-local, email, file, hidden, image, month, number, password, radio, range,
          reset, search, submit ,tel, text, time, url, week
- name => eindeutiger name des Formularfeldes => Pflichtangabe
- value => wert mit dem das Feld vorausgefüllt ist => optional
- size => Länge des Feldes in Zeichen => optional
- maxlength => maximal zulässige Anzahl der Zeichen => optional

---

## 100 PHP Interview Fragen


1) Was ist PHP?
	- PHP ist eine server-seitige Script-Sprache zum erstellen von dynamischen Webinhalten

2) Was bedeutet das Akronym PHP??
	- Hypertext Preprocessor

3) Welche Sprache ähnelt PHP?
	- Perl und C

4) Wofür steht PEAR / PECL?
	- PECL:
	  - PHP Extension Community Library
	  - written in C
	  - stellt zusätzliche Funktionallitäten für php zur Verfügung
	  - es werden Adminrechte benötigt um C-Compiler zu installieren
	- PEAR:
	  - PHP Extension and Application Repository
	  - Libraries und Code
	  - in PHP geschrieben
	  - Framework und Distributionsysstem für wiederverwendbare PHP-Komponenten

5) Was ist die aktuellste Version von PHP
	- 7.1
	- 7.2 ist empfohlen

6) Wie wird php in der Kommandozeile ausgeführt?
	- php script.php

7) Wie wird die interaktive PHP shell ausgeführt?
	- php -a

8) Was ist die richtige und am häufigsten Verwende Syntax um PHP-Code auszuführen?
	- <\?php ... ?>
	- <\? ... ?>

9) Wie kann direkt (ohne echo) im Browser ausgegeben werden?
	- <\?= ... ?>
	- <\?= $_SERVER['PHP_SELF'] ?>

10) Was ist der größte Unterschiede zwischen PHP 4 und PHP 5?
	- PHP 5 stellt mehr OOP Features zur Verfügung

11) Ist mehrfachvererbung in PHP möglich?
	- Nein
	- Nur einfach Vererbung mit "extends" ist möglich

12 ) Was bedeuted es wenn eine Klasse oder eine Methode als "final" deklariert ist?
- Klasse:
	- Wenn eine Klasse als "final" deklariert ist kann von dieser keine weitere abgeleitet werden
- Methoden:
	- Wenn eine Methode als "final" deklariert ist, kann diese nicht überschrieben werden
	- final Metoden können auch nicht überladen werden

13) Wie erfolgt der Vergleich von Objekten in PHP?
	- mit dem "==" operator kann verglichen werden ob zwei objekte aus der selbem Klasse instanziert sind und
	  die selben Attribute und Werte aufweisen
	- mit dem "===" operator kann verglichen werden ob zwei objekte auf die selbe instanz der selben klasse verweisen

14) Wie könne PHP und HTML miteinander interagieren?
	- HTML kann mit PHP Skripten generiert werden
	- HTML kann informationen an PHP übergeben

15) Welche Art von Operation ist notwendig wenn Werte über ein Formular oder eine URL übergeben werden?
	- htmlspecialchars()
	- urlencode()

16) Wie können PHP und Javascript miteinander interagieren?
	- JS und PHP könne nicht direkt miteinander interagieren
	- PHP ist eine server-seitige sprache
	- JS ist eine client-seitige sprache
	- PHP kann Javascript-Code erzeugen
	- JS kann bestimmte Variablen über die URL an PHP weitergeben


17) Was wird benötigt, um die Bildfunktion nutzen zu können?
	- GD2 Library
	- is written in C
	- to activate paste "extension=php_gd2.dll" into your php.ini => reboot server

18) Wozu dient die Funktion "imagetypes()"?
	- Damit kann geprüft werden ob ein Bildformat/Bildtyp von GD2 unterstüzt wird
	- Bsp.: 
		if(imagetypes() == IMG_PNG)
			echo "Yes, PNG is supported!"

19) Mit welchen Funktionen werden die Bildeigenschaften (Größe, Breite, Höhe) ermittelt?
	- Größe => getimagesize()
	- Breite => imagesx()
	- Höhe => imagessy()

20) Wie werden ausführungsfehler mit include() und require_once() behandelt?
	- kann die Datei mit require() nicht gefunden/geöffnet werden endet sie mit einem schwerwiegendem Fehler
	- kann die Datei mit include() nicht gefunden/geöffnet werden endet sie mit einem warnhinweis

21) Was sind die Hauptunterschiede zwischen require() und require_once() ?
	- require() und require_once() führen beide die selbe Aufgabe aus
	- bei require_once() wird aber geprüft ob das PHP-Skript bereits verfügbar gemacht wurde und würde daher nicht einbinden
	- gleiches gilt für include_once() und include()

22) Wie kann man Text mit einem PHP-Skript anzeigen?
	- echo "text"
	- print "text"

23) Wie können wir Informationen einer Variablen anzeigen, die von einem Menschen gelesen werden können?
	- print_r()

24) Wie kann eine unendliche Ausführungszeit für PHP-Skripte eingestellt werden?
	- set_time_limit(0)
	- so wird der PHP-Fehler "maximum execution time exeeded" nicht auftreten
	- dies kann auch in der php.ini angegeben werden

25) Was bedeutet der PHP-Fehler "Parse error in PHP -unexpected T_variable at line x" ?
	- Hierbei handelt es sich um einen Syntaxfehler, der ausdrückt das ein Fehler in Zeil x beim
	  Parsen und Ausführen aufgetreten ist


26) Was müss getan werden, um eine Datei in eine Excel-Datei exportieren zu können?
	- siehe excel_export.php
	- gebräuchlich ist es daten in einem excel unterstützen Format abzurufen wie bspw.: CSV

27) Wofür ist die Funktion "file_get_contents()" nützlich?
	- kann eine Datei lesen werden und den Inhalt in einer variable speichern

28) Wie kann aus einem PHP-Skript eine MySQL-Datenbank-Verbindung hergestellt werden?
	- siehe mySQL.php

29) Wofür ist die Funtkion "mysql_pconnect()" nützlich?
	- diese ist seit php 5.5.0 veraltet und wurde in php 7.0.0 entfernt

30) Wie wird die Ergebnismenge von MySQL in PHP gehandhabt?
	- https://www.php.net/manual/de/book.mysqli.php

31) Bleibt frei

32) Bleibt frei

33) Bleibt frei

34) Wie wird mit der GET-Methode auf die in der URL gesendeten Daten zugreifen?
	- $_GET[""]
	- Bsp.: $variable = $_GET["var"]

35) Wie wird mit der POST-Methode auf die über die URL gesendeten Daten zugeriffen?
	- $_POST

36) Wie kann geprüft werden, ob der Wert einer bestimmten Variable eine Zahl ist?
	- is_numeric()

37) Wie kann gerprüft werden, ob der Wert einer bestimmten Variable alphanumerisch ist?
	- mit der dedizierten Funktion "ctype_alnum"

38) Wie kann überprüft werden, ob der Wert einer bestimmten Variable leer ist?
	- empty()

39) Was bedeutet die Funktion "unset()" ?
	- sie löscht die angegebbene Variable => "undefined"
	- Unterschieden werden muss hierbei ob hierbei eine gloabel Variable innerhalb einer Funktion gelöscht werden soll
	- https://www.php.net/manual/de/function.unset.php

40) Was bedeutet die Funktion "unlink()"
	- sie löscht die angegebene Datei
	- https://www.php.net/manual/de/function.unlink.php

41) Wie können Daten "escaped" werden bevor sie in die Datenbank gespeichert werden?
	- Mit der Funktion "addshlashes()"

42) Wie werden Escape-Zeichen aus einem String entfernt?
	- Mit der Funktion "stripslashes()"

43) Wie können eingehende Daten automatisch escaped werden?
	- Konfiguration der Magic-Quotes Option in der php.ini

44) Was gibt die Funktion "get_magic_quotes_gpc()" zurück?
	- Informationen wie die Magic-Quotes Option konfiguriert ist

45) Wie können HTML-Tags aus einer Datenansammlung entfernt werden?
	- Mit der Funktion strip_tags()

46) Wozu sind statische Variablen in Methoden nützlich?
	- Statische Variablen werden nur beim ersten Aufruf der Funktion definiert
	  und ihr Wert kann kann danach geändert werden
    <?php
	function test(){
		static $variable = 1;
		echo $variable;
		$variable++;
	}
	test(); // 1
	test(); // 2
	test(); // 3
    ?>

47) Wie kann man auf eine definierte Variable in Funktionen zugreifen?
	- mit dem Schlüsselwort "global"
	- Bsp.:
	  $variable = 1;
	  function test(){
		global $variable;
	  }

48) Wir kann ein Wert von einer Funktion zurück gegeben werden?
	- mit dem Schlüsselwort "return"

49) Was ist die am meistgenutzte Funktion um paswörter zu hashen?
	- crypt()
	- hash()

50) Welche kryptografische Erweiterung ermöglicht die Erzeugung und
    Überprüfung von digitalen Signaturen?
	- die OpenSSl Erweiterung

51) Wie wird eine Kostante in PHP definiert?
	- define("variable", 123);

52) Wie kann eine Variable als Referenz übergeben werden?
	- mit dem kaufmännischen &-Zeichen
	- &$variable

53) Funktioniert ein Vergleich einer Ganzahl (12) und einer Zeichenkette ("13")?
	- Ja, da PHP immer versucht alles auf den Integer-Typ zu casten



