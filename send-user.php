<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$rsUser = CUser::GetByID(7);
$arUser = $rsUser->Fetch();


$APPLICATION->SetTitle("send_user");

function sendDataUserB24($userID, $userPass)
{
    $queryUrl = 'https://domrf.bitrix24.ru/rest/8/4yhuzrws5nba2ggz/crm.contact.update.json';
    $queryData = http_build_query(
        array(
            "ID" => $userID,
            "fields[UF_CRM_CONTACT_1700058103263]" => (string)$userPass,
        )
    );
//    echo '<pre> $queryData' . $queryData . '</pre>';

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);

    return json_decode($result, true);
}

?>



<?
$arDataUser = array(
    'ID' => $arUser['ID'],
    'NAME' => $arUser['NAME'],
    'UF_CRM_ID' => $arUser['UF_CRM_ID'],
    'UF_PASSPORT_NUMBER' => $arUser['UF_PASSPORT_NUMBER'],

);
//echo $arUser;
?>
    <pre>
<? print_r($arDataUser); ?>
    </pre>


    <form method="post">
        <input type="submit" name="create" value="Отправить">
    </form>
<?
if ($_POST) {
    print_r(sendDataUserB24($arDataUser['UF_CRM_ID'], $arDataUser['UF_PASSPORT_NUMBER']));;
}
?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>