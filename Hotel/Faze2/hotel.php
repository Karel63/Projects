<?php
    $content = file_get_contents("hotel.csv");
    $content = iconv("CP1250", "UTF-8", $content);
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="hotel.css">
</head>
<body>
    <div class="mainPage">
        <div class="leftLine">
        <?php
            echo "<h1 class='textUp'>" . $content . "</h1>";
        ?>
            <div class="buttons">
                <a href="#sec1">
                    <div class="rectangle">Úvod</div>
                </a>
                <a href="#sec2">
                    <div class="rectangle">Služby</div>
                </a>
                <a href="#sec3">
                    <div class="rectangle">Kontakty</div>
                </a>
                <a href="#sec4">
                    <div class="rectangle">Fotogalerie</div>
                </a>
            </div>
            <h1 class="textUp">Vzdělávací středisko a hotel Varnsdorf</h1>
        </div>
    </div>
    <div class="square hidin">
        <section class="text1" id="sec1">Úvod</section>
        <p class="text2">
            Vítáme Vás na stránkách naší školy Vyšší odborné školy, Střední průmyslové školy a Střední odborné školy služeb a cestovního ruchu ve Varnsdorfu, které se věnují vzdělávacímu středisku a doprovodných služeb. Nabízíme Vám jen ty nejkvalitnější služby v daném oboru. Neváhejte a využijte těchto služeb, které realizujeme v rámci vzdělávání našich žáků.
            Náš personál je Vám vždy plně k
            dispozici. Naší předností je neustálé zkvalitňování a vylepšování námi nabízených služeb. Důkazem
            je stále vzrůstající počet
            spokojených zákazníků.<br/><br/>
        </p>
        <img class="image1" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000042-289192891b/20160720_095925%20kopie.jpg" alt="Obrázek hotelu">
        <p class="text1" id="sec2">Služby - Ubytování</p>
        <p class="text2">
            Poskytujeme ubytování ve 12 dvoulůžkových pokojích s vlastním sociálním zařízením a připojením k internetu (WI-FI).
            <br/><br/>
            Ubytovací zařízení je umístěno v klidné části města ve výhodné poloze blízko státní hranice, která je vhodná pro výlety jak do oblasti Českého Švýcarska, tak do okolí v Sasku, které nabízí nepřeberné možnosti sportovního i turistického vyžití, perfektní cyklostezky, aquaparky, památky a další zajímavosti.
            <br/><br/>
            Cena ubytování:
            <br/><br/>
            1 osoba/noc - 460,- Kč bez snídaně
            <br/>
            1 osoba/noc - 560,- Kč se snídaní
            <br/><br/>
            Slevy individuální - skupiny, dlouhodobé pobyty.
            <br/><br/>
            Více zde: https://vcvdf.webnode.cz/sluzby/sluzba-1/
        </p>
        <p class="text1">Služby - Restaurace</p>
        <p class="text2">
            V moderním a příjemném prostředí restaurace vzdělávacího střediska nabízíme denní polední menu, možnost pořádání malých společenských akcí, setkání, jednání, rautů či svateb. Restaurace nabízí v letním období venkovní posezení.
            <br/><br/>
            Cena menu: 95,- Kč (včetně polévky)
            <br/><br/>
            Více zde: https://vcvdf.webnode.cz/sluzby/sluzba-2/
        </p>
        <p class="text1">Služby - Prostor</p>
        <p class="text2">
            Nabízíme možnost pořádání seminářů, rekvalifikací, dalšího profesního vzdělávání, tréninkových pobytů a jednání ve stupňovité posluchárně - 45 míst, interaktivní tabule, dataprojektor, každé místo lze připojit k internetu, moderně vybavené učebně výpočetní techniky /20 míst/ a oborné učebně /24 míst/, interaktivní tabule, dataprojektor, barevný televizor + video.
            <br/><br/>
            K zázemí posluchárny patří kabinet pro přednášejícího, kuchyňka pro přípravu malého občerstvení, restaurace pro stravování účastníků.
            <br/><br/>
            Cena pronájmu posluchárny: 1.320 Kč/den při vícedenním pronájmu a 300 Kč/hodina při jednodenním pronájmu.
            <br/><br/>
            Cena pronájmu učebny PC: 1.320 Kč/den při vícedenním pronájmu a 300 Kč/hodina při jednodenním pronájmu. Cena pronájmu odborné učebny: 480 Kč/den.
            <br/><br/>
            Cena pronájmu zasedací místnosti: 480 Kč/den.
            <br/><br/>
            Na tyto akce zajistíme dle objednávky malé pohoštění nebo oběd.
            <br/><br/>
            Více zde: https://vcvdf.webnode.cz/sluzby/pronajem-prostor/
        </p>
        <p class="text1" id="sec3">Kontakty</p>
        <p class="text2">
            Adresa Vzdělávacího střediska:
            <br/><br/>
            Karlova 3317, 407 47 Varnsdorf
            <br/><br/>
            zodpovědná osoba: Petra Sedláčková
            <br/><br/>
            e-mail: petra.sedlackova@skolavdf.cz
            <br/><br/>
            telefonní čísla:
            <br/><br/>
            kancelář - 739 418 147
            <br/><br/>
            recepce - 775 475 549
            <br/><br/>
            pevná - 412 331 160
            <br/><br/>
            restaurace: 739 096 172
            <br/><br/>
            Fakturační adresa:
            <br/><br/>
            Vyšší odborná škola, Střední průmyslová škola a Střední odborná škola služeb a cestovního ruchu, Varnsdorf, Bratislavská 2166, příspěvková organizace
            <br/><br/>
            Bratislavská 2166, 407 47 Varnsdorf
            <br/><br/>
            IČ: 18383874
            <br/><br/>
            Více zde: https://vcvdf.webnode.cz/kontakt/
        </p>
        <p class="text1" id="sec4">Fotogalerie</p>
        <div class="image">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000037-7e95c7e95f-public/20160720_095925%20kopie.jpg" alt="Obrázek1">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000038-573895738b-public/20160720_100057.jpg" alt="Obrázek2">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000041-c6cd0c6cd4-public/IMG-20170530-WA0002.jpg" alt="Obrázek3">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000008-cb814cd74d-public/VS%20-%20raut%2003.jpg" alt="Obrázek4">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000005-8da988ea2c-public/VS%20-%20recepce.jpg" alt="Obrázek5" srcset="">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000039-1245b1245d-public/IMG_20180829_132832.jpg" alt="Obrázek6">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000040-88ca388ca6-public/IMG_20180829_132941.jpg?s3=1" alt="Obrázek7">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000013-dd0f2de0b0-public/VS%20-%20PC%20u%C4%8Debna%2001.JPG" alt="Obrázek8">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000014-18c461ab71-public/VS%20-%20posluch%C3%A1rna%2001.JPG" alt="Obrázek9">
            <img class="image2" src="https://897c381448.cbaul-cdnwnd.com/bf205b474209f0c17455f833ef2a6081/200000015-95c0796bc9-public/VS%20-%20posluch%C3%A1rna%2003.jpg" alt="Obrázek10">
        </div>
    </div>
</div>
</body>
</html>