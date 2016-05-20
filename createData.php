﻿<?php
	require_once("simple_html_dom.php");
# http://php.net/manual/en/function.file-get-contents.php

	$words = ['abielusuhted',
'abielusĆµrmus',
'abielusĆ¤ng',
'abielutruudus',
'abielutunnistus',
'abielutĆ¼li',
'abieluvara',
'abieluvaraleping',
'abieluvoodi',
'abieluvĆ¤line',
'abieluĆµnn',
'abiesimees',
'abiettevĆµte',
'abifond',
'abihoone',
'abijoon',
'abijĆµud',
'abikaasa',
'abikaasadevaheline',
'abikeel',
'abikirik',
'abiklass',
'abikomitee',
'abikool',
'abikĆ¤si',
'abil',
'abilaev',
'abileht',
'abiline',
'abilinnapea',
'abilĆ¶Ć¶k',
'abimaavanem',
'abimajand',
'abimajapidamine',
'abimaterjal',
'abimees',
'abimetsaĆ¼lem',
'abimootor',
'abimĆµis',
'abinoot',
'abinĆµu',
'abiogenees',
'abiootiline',
'abioperatsioon',
'abiotsija',
'abiotsimine',
'abiotsiv',
'abiotsivalt',
'abipakk',
'abipakkuja',
'abipakkumine',
'abipaluja',
'abipalumine',
'abipaluv',
'abipaluvalt',
'abipalve',
'abipersonal',
'abipind',
'abipolitseinik',
'abiprefekt',
'abiprofessor',
'abiprogramm',
'abiprokurĆ¶r',
'abipĆ¶Ć¶rdsĆµna',
'abiraamat',
'abiraha',
'abiriist',
'abiruum',
'abisaadetis',
'abiseade',
'abistaja',
'abistama',
'abistamine',
'abistamisfond',
'abistamiskassa',
'abistamiskatse',
'abistamisleping',
'abistamisvĆ¶Ć¶',
'abistavat',
'abistus',
'abisĆµna',
'abiÅ�aht',
'abitarvitaja',
'abiteadus',
'abiteenindus',
'abiteeninduspersonal',
'abiteenistus',
'abitegu',
'abiteoline',
'abiteoreem',
'abitootmine',
'abitsehh',
'abitu',
'abitult',
'abiturient',
'abitus',
'abitusseisund',
'abitustunne',
'abituurium',
'abitĆ¶Ć¶',
'abitĆ¶Ć¶jĆµud',
'abitĆ¶Ć¶line',
'abivahend',
'abivaim',
'abivaimulik',
'abivajaja',
'abivajamine',
'abivallavanem',
'abivalmidus',
'abivalmilt',
'abivalmis',
'abivedur',
'abiverb',
'abivĆ¤gi',
'abiĆµpetaja',
'abiĆµppejĆµud',
'abjakas',
'ablakteerima',
'ablas',
'ablastuma',
'ablatiiv',
'ablatiivne',
'ablatsioon',
'ablaut',
'able',
'abnormne',
'abnormsus',
'abolitsionism',
'abolitsionist',
'abolitsioon',
'aboneerima',
'aboneerimine',
'abonement',
'abonementkaart',
'abonementkontsert',
'abonementleping',
'abonementmaks',
'abonementpilet',
'abonementpĆ¤Ć¤se',
'abonementraamat',
'abonendiliin',
'abonendipunkt',
'abonent',
'abonenttelegraaf',
'abordaaÅ¾',
'abordeerima',
'abordikeeld',
'abordioht',
'aborditegemine',
'aborditegija',
'abori',
'aborigeen',
'aborigeenne',
'abort',
'aborteerima',
'aborteerimine',
'aborti',
'abortiivne',
'abortija',
'abortima',
'abortimine',
'abrakadabra',
'abrasiiv',
'abrasiivaine',
'abrasiivketas',
'abrasiivlĆµikeriist',
'abrasiivmaterjal',
'abrasiivne',
'abrasiivpaber',
'abrasiivpasta',
'abrasiivpuhasti',
'abrasiivpulber',
'abrasiivriie',
'abrasiivtĆ¶Ć¶tlus',
'abrasioon',
'abrekk',
'abreviatuur',
'abriss',
'absats',
'absentism',
'absindijooja',
'absindijoomine',
'absint',
'absoluteerima',
'absoluteerimine',
'absolutiseerija',
'absolutiseerima',
'absolutiseerimine',
'absolutism',
'absolutismiajastu',
'absolutist',
'absolutistlik',
'absolutsioon',
'absoluudistama',
'absoluut',
'absoluutalkohol',
'absoluutarv',
'absoluutarvestus',
'absoluutkaal',
'absoluutkĆµrgus',
'absoluutne',
'absoluutniiskus',
'absoluutselt',
'absoluutsus',
'absoluutvĆµitja',
'absoluutvĆ¤Ć¤rtus',
'absorbeerija',
'absorbeerima',
'absorbeerimine',
'absorbeeruma',
'absorbeerumine',
'absorbent',
'absorber',
'absorptsioon',
'absorptsiooni',
'absorptsioonispekter',
'absorptsioonitegur',
'absorptsioonivĆµime',
'ABS-pidurid',
'abs-pidurid',
'abstinents',
'abstraheerija',
'abstraheerima',
'abstraheerimine',
'abstraheerimisprotsess',
'abstraheerimisvĆµime',
'abstraheering',
'abstraheeritu',
'abstraheeruma',
'abstraheerumine',
'abstrakt',
'abstraktne',
'abstraktselt',
'abstraktsionism',
'abstraktsionist',
'abstraktsionistlik',
'abstraktsioon',
'abstraktsioonivĆµime',
'abstraktsus',
'abstraktsĆµna',
'abstsess',
'abstsiss',
'abstsisstelg',
'absurd',
'absurdi',
'absurdikirjanik',
'absurdism',
'absurditeater',
'absurdne',
'absurdselt',
'absurdsus',
'absurdum',
'abt',
'abtiss',
'abtkond',
'abu',
'abukasukas',
'abuulia',
'abuutilon',
'abĆ¼ssaal',
'accelerando',
'Achilleus',
'achilleus',
'Achilleuse',
'achilleuse',
'action',
'ad',
'a-d',
'adaa',
'adaadÅ¾o',
'adaat',
'adagio',
'adamsiit',
'adaptatsioon',
'adaptatsiooni',
'adaptatsioonivĆµime',
'adapteerija',
'adapteerima',
'adapteerimine',
'adapteeruma',
'adapteerumine',
'adapter',
'adaptiiv',
'adaptiivne',
'adaptsioon',
'adekvaatne',
'adekvaatselt',
'adekvaatsus',
'adeniit',
'adenoid',
'adenoom',
'adenoviirus',
'adept',
'ader',
'adervars',
'adessiiv',
'adessiivne',
'adhereeruma',
'adherentne',
'adhesioon',
'adhesiooni',
'adhesioonjĆµud',
'adiabaat',
'adiabaatiline',
'adiantum',
'adipiinhape',
'aditiivne',
'aditiivselt',
'aditiivsus',
'adjektiiv',
'adjektiivne',
'adjektivatsioon',
'adjektiveeruma',
'adjektiveerumine',
'adjunkt',
'adjutant',
'adjĆ¶Ć¶',
'administraator',
'administratiiv',
'administratiivakt',
'administratiivaparaat',
'administratiivasutus',
'administratiivhoone',
'administratiivkaristus',
'administratiivkeskus',
'administratiivkohus',
'administratiivkomisjon',
'administratiivkord',
'administratiivkorras',
'administratiivkulud',
'administratiivne',
'administratiivorgan',
'administratiivosakond',
'administratiivpersonal',
'administratiivpiir',
'administratiivpiirkond',
'administratiivselt',
'administratiivterritoriaalne',
'administratiiv-territoriaalne',
'administratiivtrahv',
'administratiivtĆ¶Ć¶taja',
'administratiivvastutus',
'administratiivĆµigus',
'administratiivĆ¼ksus',
'administratiivĆ¼leastumine',
'administratsioon',
'administreerija',
'administreerima',
'administreerimine',
'admiral',
'admiralilaev',
'admiraliteet',
'adneksiit',
'adoonis',
'adopteerija',
'adopteerima',
'adopteerimine',
'adoptsioon',
'adra',
'adraeelik',
'adrahĆµlm',
'adrakohtunik',
'adrakohus',
'adrakurg',
'adrakĆ¤sipuu',
'adralusikas',
'adramaa',
'adramaarevisjon',
'adramadrus',
'adramees',
'adranina',
'adranuga',
'adrapea',
'adrapĆµllundus',
'adraraha',
'adrasahk',
'adrasajandik',
'adratald',
'adratalle',
'adratalupoeg',
'adratera',
'adratĆ¼Ć¼p',
'adravannas',
'adrenaliin',
'adrenaliinirikas',
'adrenaliinitulv',
'adressaat',
'adressant',
'adresseerija',
'adresseerima',
'adresseerimine',
'adrik',
'adru',
'adrujada',
'adrune',
'adrupeenar',
'adruvall',
'adsorbaat',
'adsorbeerija',
'adsorbeerima',
'adsorbeerimine',
'adsorbeeruma',
'adsorbeerumine',
'adsorbent',
'adsorber',
'adsorptsioon',
'adsorptsiooni',
'adsorptsioonitegur',
'adsorptsioonivĆµime',
'adstraat',
'adstraatkeel',
'adstringeerima',
'adÅ¾aar',
'adÅ¾aari',
'adÅ¾aarid',
'adÅ¾aarlanna',
'adÅ¾ika',
'aduja',
'aduktor',
'aduma',
'adumine',
'Aduur',
'A-duur',
'aduur',
'a-duur',
'advektsioon',
'advendikalender',
'advendikĆ¼Ć¼nal',
'advent',
'adventiiv',
'adventiivne',
'adventiivorgan',
'adventiivtaim',
'adventism',
'adventist',
'adventisti',
'adverb',
'adverbiaal',
'adverbiaallause',
'adverbiaalne',
'adverbialisatsioon',
'adverbialiseeruma',
'adverbiline',
'adverbistuma',
'adverbistumine',
'adversatiivne',
'advokaadikutse',
'advokaadipraksis',
'advokaadipraktika',
'advokaat',
'advokaatkond',
'advokaatlik',
'advokatuur',
'AdĆµgee',
'adĆµgee',
'adĆµgeed',
'adĆµgeelanna',
'ae',
'aed',
'aedaster',
'aeddaalia',
'aedharakputk',
'aedheleenium',
'aedhernes',
'aedhiirehernes',
'aedhortensia',
'aedik',
'aedkannike',
'aedkool',
'aedlepalind',
'aed-lepalind',
'aedlevkoi',
'aedliivatee',
'aed-liivatee',
'aedlinn',
'aedmaasikakeedis',
'aedmaasikamoos',
'aedmaasikas',
'aedmajoraan',
'aedmalts',
'aedmeliss',
'aedmoorputk',
'aedmurakas',
'aedmustjuur',
'aedne',
'aednelk',
'aednik',
'aednikukunst',
'aednikunuga',
'aednikupoiss',
'aednikutĆ¶Ć¶',
'aedoakonserv',
'aedoblikas',
'aedpiste',
'aedpistepilu',
'aedporgand',
'aed-pĆµĆµsalind',
'aedpĆµĆµsalind',
'aedraudĆ¼rt',
'aedruut',
'aedrĆµigas',
'aedsalat',
'aedsalvei',
'aedseller',
'aedspinat',
'aedÅ�ampinjon',
'aedtill',
'aedtulp',
'aeduba',
'aedvaak',
'aedvaarikakompott',
'aedvaarikas',
'aedvili',
'aedvilja',
'aedviljagarneering',
'aedviljahoidla',
'aedviljakauplus',
'aedviljakonserv',
'aedviljalĆµikur',
'aedviljapeenar',
'aedviljapuljong',
'aedviljapĆ¼ree',
'aedviljaraguu',
'aedviljasalat',
'aedviljasupp',
'aedviljatoit',
'aedviljavorm',
'aedviljavormiroog',
'aedvoodi',
'aedvorm',
'aedvĆµhumĆµĆµk',
'aedĆµun',
'aedĆµunapuu',
'aeg',
'aega',
'aegajaline',
'aegajalt',
'aeg-ajalt',
'aegamisi',
'aegamĆ¶Ć¶da',
'aegamĆ¶Ć¶dane',
'aeganĆµudev',
'aegapidi',
'aegapidine',
'aegaviitev',
'aegaviitmatult',
'aegavĆµttev',
'aegilmutus',
'aegkond',
'aeglane',
'aeglasekasvuline',
'aeglaselt',
'aeglasevooluline',
'aeglasevĆµitu',
'aeglema',
'aeglus',
'aeglussĆµit',
'aeglustaja',
'aeglustama',
'aeglustamine',
'aeglusti',
'aeglustuma',
'aeglustumine',
'aeglustus',
'aeglustusmaa',
'aeglustusteekond',
'aegluubis',
'aegluup',
'aegne',
'aegrelee',
'aegruum',
'aegruumiline',
'aegsalt',
'aegsamini',
'aegsasti',
'aegselt',
'aegsus',
'aegu',
'aeguma',
'aegumatu',
'aegumatult',
'aegumatus',
'aegumine',
'aegumistĆ¤htaeg',
'aegumus',
'aegunu',
'aegus',
'aegvĆµte',
'aeleja',
'aelema',
'aelemine',
'aer',
'aeratsioon',
'aerjalalised',
'aero',
'aerobioos',
'aerobuss',
'aerodroom',
'aerodĆ¼naamika',
'aerodĆ¼naamiline',
'aerodĆ¼naamiliselt',
'aerodĆ¼naamilisus',
'aerofoto',
'aerofotograafia',
'aerofotograafiline',
'aerofotoluure',
'aerofotomĆµĆµdistamine',
'aerofotomĆµĆµdistus',
'aerograaf',
'aeroionisaator',
'aeroionisatsioon',
'aeroioon',
'aeroioonmassaaÅ¾',
'aeroioonravi',
'aerolift',
'aeroloog',
'aeroloogia',
'aeroloogiajaam',
'aeroloogiline',
'aeromeetod',
'aeromehaanika',
'aeromobiilsus',
'aeronaut',
'aeronautika',
'aeronautiline',
'aeronavigatsioon',
'aeroob',
'aeroobik',
'aeroobika',
'aeroobikaharjutus',
'aeroobikaharrastaja',
'aeroobikaharrastus',
'aeroobikarĆ¼hm',
'aeroobikatreener',
'aeroobikatreening',
'aeroobikatund',
'aeroobne',
'aeroobtants',
'aeroobvĆµimlemine',
'aeroon',
'aeroplaan',
'aerosaan',
'aerosool',
'aerosooldeodorant',
'aerosooldesodorant',
'aerosooli',
'aerosoolima',
'aerosoolipihusti',
'aerosoolitama',
'aerosoolitamine',
'aerosoolpreparaat',
'aerosoolravi',
'aerostaat',
'aerostaatika',
'aerotank',
'aeroteraapia',
'aerotropism',
'aeru',
'aerulaba',
'aerulaev',
'aeruline',
'aerulĆ¶Ć¶k',
'aerupaat',
'aerupink',
'aerusulane',
'aerutaja',
'aerutama',
'aerutamine',
'aerutamisvĆµistlused',
'aerutull',
'aerutĆµmme',
'aerutĆ¼vi',
'aetama',
'aetamine',
'aetis',
'aeva',
'aevastaja',
'aevastama',
'aevastamine',
'aevasti',
'aevastus',
'aevastusgaas',
'afaasia',
'afeel',
'afekt',
'afektatsioon',
'afekteerima',
'afekteeritult',
'afekteeritus',
'afektiivne',
'afektiseisund',
'aferentne',
'aferist',
'affaires',
'afgaan',
'afgaani',
'afgaanid',
'afgaanlanna',
'afiin',
'afiinne',
'afiinsus',
'afiks',
'afineerima',
'afirmatsioon',
'afiÅ�eerija',
'afiÅ�eerima',
'afiÅ�eerimine',
'afiÅ�Å�',
'afoonia',
'aforism',
'aforistlik',
'afrikaani',
'afrikaat',
'afrikander',
'afrikanist',
'afrikanistika',
'afro',
'afroaasia',
'afroameerika',
'afroameeriklane',
'afropats',
'afropatsid',
'aft',
'after-party',
'afĆ¤Ć¤r',
'aga',
'agaa',
'agaam',
'agaamia',
'agaav',
'agan',
'agana',
'aganad',
'aganalasn',
'aganaleib',
'aganane',
'aganasulp',
'aganasĆµel',
'aganik',
'agar',
'agaragar',
'agar-agar',
'agaralt',
'agaramini',
'agarasti',
'agarik',
'agarsĆ¶Ć¶de',
'agarus',
'agataja',
'agatama',
'agatamine',
'age',
'ageerima'];
	$newArray = array();

	foreach (  $words as $key => $word) {
		$syns = results($word);

		//echo count(	$syns);

		if(count(	$syns) > 2){



			$o = new stdClass();
			$o->word = $word;
			$o->syns = $syns;

			array_push($newArray, $o);
		}


	}
	//echo count($newArray);
	echo json_encode($newArray);


function results ($search){
	//$title, $description, $image, $url
	$contents = file_get_contents('http://www.eki.ee/dict/sys/index.cgi?Q='.$search.'&F=M&C06=et');
	//var_dump($contents);

	$html = str_get_html( mb_convert_encoding($contents, 'HTML-ENTITIES', 'UTF-8'));

	//http://simplehtmldom.sourceforge.net/manual.htm

  $syns = array();

	foreach($html->find('.tervikart span[class=x_m m]') as $element){


			$syn =$element->innertext;
      array_push($syns, $syn);

      //obje
			//echo $syn;
			//echo " ";
	}

	return $syns;
  //var_dump($syns);




}


	//$file_name = "cache.txt";

	//$requestMethod = "GET";
