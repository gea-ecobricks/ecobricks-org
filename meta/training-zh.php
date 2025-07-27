<?php

include '../ecobricks_env.php';

$trainingId = isset($_GET['training_id']) ? $_GET['training_id'] : (isset($_GET['id']) ? $_GET['id'] : 0);

$sql = "SELECT * FROM tb_trainings WHERE training_id = '" . $trainingId . "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($array = $result->fetch_assoc()) {

        echo '<title>'. $array["training_title"] .' |  '. $array["no_participants"] .' 参与者</title>';

        echo '<meta name="description" content="'. $array["no_participants"] .' 位参与者在 '. $array["location_full"] .' 参加了 '. $array["training_type"] .' 培训。">';

        echo '<meta name="keywords" content="培训, 工作坊, 塑料教育, ecobrick, '. $array["lead_trainer"] .', '. $array["training_type"] .', 塑料封存, 回收, 替代方案, 生态砖, '. $array["training_country"] .','. $array["training_location"] .'">';

        echo '<meta property="og:url" content="https://ecobricks.org/'. $lang .'/training.php?training_id='. $array["training_id"] .'">' ;
        echo '<meta property="og:title" content="'. $array["training_title"] .' |  '. $array["no_participants"] .' 参与者">';
        echo '<meta property="og:description"   content="'. $array["no_participants"] .' 位参与者在 '. $array["location_full"] .' 参加了 '. $array["training_type"] .' 培训。">';
        echo '<meta property="og:image" content="'. $array["feature_photo1_main"] .'">';
        echo '<meta property="og:image:alt"     content="我们的生态砖培训照片">';
        echo '<meta property="og:locale" content="zh_CN" >';
        echo '<meta property="og:type"          content="website">';

        echo '<meta property="og:type" content="article" >';
        echo '<meta property="og:site_name" content="Ecobricks.org" >';
        echo '<meta property="article:publisher" content="https://web.facebook.com/ecobricks.org" >';
        echo '<meta property="article:modified_time" content="'. $array["training_logged"] .'" >';
        echo '<meta property="og:image:type" content="image/webp" >';
        echo '<meta name="author" content="全球生态砖联盟" >';
        echo '<meta name="twitter:card" content="summary" >';
        echo '<meta name="twitter:label1" content="预计阅读时间" >';
        echo '<meta name="twitter:data1" content="15分钟" > ';
    }

} else {
    echo '<META NAME="robots" CONTENT="noindex">';
    echo '<title>未找到培训 | Ecobricks.org</title>';
    echo '<meta name="description" content="未找到对应培训 ID 的数据。 可能链接错误或培训尚未完全记录。"> ';
}
$conn->close();

?>
