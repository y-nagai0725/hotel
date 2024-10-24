<?php
//ヘッダー部分（<head></head>内）にタグを挿入したいときは、このテンプレートに挿入（ヘッダーに挿入する解析タグなど）
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
//例：<script type="text/javascript">解析コード</script>
?>
<?php if (!is_user_administrator()) :
//管理者を除外してカウントする場合は以下に挿入 ?>

<?php endif; ?>
<?php //全ての訪問者をカウントする場合は以下に挿入 ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400..700&family=Zen+Old+Mincho:wght@500;700&display=swap" rel="stylesheet">