<?php # lang_cs.inc.php 1.0 2009-07-07 11:58:26 VladaAjgl $

/**
 *  @version 1.0
 *  @author Vladim�r Ajgl <vlada@ajgl.cz>
 *  @translated 2009/07/07
 */@define('MIMBO_INSTR','<b>Pozn�mka:</b> �ablona podporuje - pouze na v�choz� str�nce - jeden doprovodn� obr�zek ke ka�d�mu p��sp�vku. Aby tato funkce spr�vn� pracovala, mus� b�t nainstalov�n plugin serendipity <i>Roz���en� vlastnosti p��sp�vk�</i>. V nastaven� tohoto pluginu mus� b�t vytvo�eno pole MimboImage (pozor na velk� p�smena!) v nastaven� <i>Vlastn� pole</i>. P�i psan� nov�ho p��sp�vku pak m��e b�t p��sp�vku p�i�azen obr�zek z knihovny m�di� pomoc� volby <i>Roz���en� mo�nosti</i>. Doporu�en� ���ka t�chto obr�zk� z�le�� na kategorii Mimbo category (viz n�e), do kter� n�le�� p��sp�vek.<br /><br /><b>Kategorie Mimbo:</b> �ablona Mimbo zobrazuje p��sp�vky na v�choz� str�nce ve t�ech oblastech. Pou�ijte n�sleduj�c� rozbalovac� tla��tka k p�i�azen� serendipity kategori� k t�mto Mimbo kategori�m. Hlavn� kategorie bude zobrazovat nejnov�j�� p��sp�vky (doporu�en� ���ka doprovodn�ho obr�zku: max 270 pixel�). Kategorie "features" zobrazuje odkazy na t�i jej� nejnov�j�� p��sp�vky (doporu�en� ���ka doprovodn�ho obr�zku: max 255 pixel�). A nakonec m��ete vybrat a� t�i kategorie s novinkami. Ka�d� z nich bude zobrazovat nejnov�j�� p��sp�vky jako zkr�cen� l�kac� �l�nek (doporu�en� ���ka doprovodn�ho obr�zku: max 60 pixel�).<br /><br />');
@define('MIMBO_CAT_LEAD','Vyberte hlavn� kategorii');
@define('MIMBO_CAT_FEAT','Vyberte kategorii "features"');
@define('MIMBO_CAT_X1','Vyberte prvn� kategorii novinek');
@define('MIMBO_CAT_X2','Vyberte druhou kategorii novinek');
@define('MIMBO_CAT_X3','Vyberte t�et� kategorii novinek');
@define('MIMBO_CAT_X4','Vyberte �tvrtou kategorii novinek');
@define('NAVLINK_AMOUNT', 'Zadejte po�et odkaz� v naviga�n� li�t� (po zad�n� tohoto ��sla ulo�te a znovu na�t�te str�nku s nastaven�m stylu; odkaz na hlavn� str�nku blogu bude p�id�n automaticky)');
@define('NAV_LINK_TEXT', 'Zadejte text naviga�n�ho odkazu');
@define('NAV_LINK_URL', 'Zadejte plnou URL adresu naviga�n�ho odkazu');

@define('HORZ_NAV_LINK_TITLE', 'Vodorovn� naviga�n� ��dek');
@define('DROPDOWN_AMOUNT', 'Po�et rozbalovac�ch odkaz� menu (Klikn�te na odkaz "Spr�va styl�" pro znovuna�ten� a zobrazen� zm�n)');
@define('DROPDOWN_TEXT', '   Text rozbalovac�ho odkazu menu');
@define('DROPDOWN_URL', '   URL adresa rozbalovac�ho odkazu menu');
@define('SBMENUES_AMOUNT', 'Po�et blok� menu v postrann�m sloupci (Klikn�te na odkaz "Spr�va styl�" pro znovuna�ten� a zobrazen� zm�n)');
@define('SBHEADER_TEXT', 'z�hlav� menu');
@define('SBHEADER_URL', 'URL adresa z�hlav� menu');
@define('SIDEBARMENUE_AMOUNT', 'Po�et odkaz� menu (Klikn�te na odkaz "Spr�va styl�" pro znovuna�ten� a zobrazen� zm�n)');
@define('SIDEBARMENUE_TEXT', 'Text odkazu menu');
@define('SIDEBARMENUE_URL', 'URL adresa odkazu menu');
@define('SBMENUE_TITLE', 'Menu ');
@define('SB_TARGET', 'Jak otev�rat odkaz?');

@define('MIMBO_TAB_X1','V�b�r kategorie pro 1. z�lo�ku');
@define('MIMBO_TAB_X2','V�b�r kategorie pro 2. z�lo�ku');
@define('MIMBO_TAB_X3','V�b�r kategorie pro 3. z�lo�ku');
@define('MIMBO_TAB_X4','V�b�r kategorie pro 4. z�lo�ku');
@define('INFO_TAB','<b><p style="color:#FFFFFF; background-color: gray"> OKNO Z�LO�KY </p></b>');
@define('ENABLECAT_TABA','aktivovat okno z�lo�ky?');
@define('ENABLECAT_HMENUE','Aktivovat vodorovn� menu?');
@define('ENABLECAT_LEAD','Aktivovat hlavn� kategorii?');
@define('MAGAZINE_MODE','Aktivovat m�d "�asopis"?');
@define('INFO_LEAD','<b><p style="color:#000000; background-color:yellow"> Hlavn� OKNO </p></b>');
@define('INFO_NEWS','<b><p style="color:#ffffff; background-color:darkmagenta"> Novinky  </p></b>');
@define('INFO_FEAT','<b><p style="color:#ffffff; background-color:darkgreen"> OKNO Features </p></b>');
@define('INFO_TABKLOTZAMOUNT','<b><p style="color:#ffffff; background-color:orange"> Z�lo�ka Klotz OKNA (pol��ka pro zad�n� z�lo�ek naleznete zde po znovuna�ten� str�nky)</p></b>');
@define('INFO_SBARMENUESAMOUNT','<b><p style="color:#ffffff; background-color:red"> P��davn� menu (pol��ka pro zad�n� menu zde naleznete po znovuna�ten� str�nky)(</p></b>');
@define('INFO_HMENUE','<b><p style="color:#ffffff; background-color:#0066FF"> Vodorovn� menu (pol��ka pro zad�n� menu zde naleznete po znovuna�ten� str�nky)</p></b>');
@define('TABKLOTZ_AMOUNT','Po�et oken pro z�lo�ky Klotz');
@define('CATBANNER_AMOUNT','Po�et banner� kategori� ');
@define('KLOTZWIN_NAME','  jedine�n� jm�no ');
@define('ENABLE_TABX1',' Aktivovat kategorii 1. z�lo�ky? ');
@define('ENABLE_TABX2',' Aktivovat kategorii 2. z�lo�ky? ');
@define('ENABLE_TABX3',' Aktivovat kategorii 3. z�lo�ky? ');
@define('ENABLE_STICKY',' Aktivovat kategorii 4. z�lo�ky s p�ilepen�mi p��sp�vky? ');
@define('SICKY_HEADER',' Nadpis 4. z�lo�ky (p�ilepen� p��sp�vky): ');
@define('INFO_CBA_AMOUNT','<b><p style="color:#ffffff; background-color:olive">   banner kategorie (pol��ka pro zad�n� kategori� zde naleznete po znovuna�ten� str�nky)</p></b>');
@define('SB_POSITION',' Poloha: ');
@define('ENABLE_FOOTER',' Aktivovat pati�ku? ');
@define('MIMBO_CAT_ROL',' Vyberte kategorii pro rolovac� menu: ');
@define('LEFTSIDEBAR_POS',' Poloha lev�ho postrann�ho sloupce: ');
@define('TABKLOTZ_POSITION',' Poloha z�lo�ky: ');
@define('TABKLOTZ_HEIGHT',' Nadpis z�lo�ky: ');
@define('TABTEXT',' Text z�lo�ky (html): ');
@define('TABKLOTZ_HEIGHT',' Nadpis z�lo�ky: ');
@define('CAT_IMAGE_TITLE',' Obr�zek kategorie ');
@define('CATBANNER_POSITION',' Poloha obr�zk� kategori�: ');
@define('IMAGE_TO_CAT',' Vyberte kategorii: ');
@define('INFO_ROL','<b><p style="color:#000000; background-color:#FFCCFF"> Rolovac� okno menu </p></b>');
@define('ENABLECAT_ROL',' Aktivovat rolovac� menu? ');
@define('CATROL_HEADER',' Nadpis rolovac�ho menu: ');
@define('ENABLE_TOPSIDEBAR',' Aktivovat okno se z�lo�kami na vrchu postrann�ho sloupce? ');