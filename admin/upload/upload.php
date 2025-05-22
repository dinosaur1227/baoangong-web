<?php
// 設定檔案儲存目錄，可改為 uploads/banner 或 photos
$targetDir = "uploads/";

// 建立資料夾（如果尚未存在）
if (!is_dir($targetDir)) {
  mkdir($targetDir, 0777, true);
}

// 檢查是否有上傳檔案
if (isset($_FILES["file"])) {
  $file = $_FILES["file"];
  $filename = basename($file["name"]);
  $targetFile = $targetDir . time() . "_" . $filename; // 加上時間避免重名
  $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

  // 檢查檔案副檔名
  $allowedTypes = ["jpg", "jpeg", "png", "gif"];
  if (!in_array($fileType, $allowedTypes)) {
    echo "❌ 僅允許上傳 JPG / PNG / GIF 圖檔。";
    exit;
  }

  // 將檔案搬移到目標資料夾
  if (move_uploaded_file($file["tmp_name"], $targetFile)) {
    echo "✅ 上傳成功！<br>預覽：<br><img src='" . $targetFile . "' style='max-width: 100%; margin-top: 1rem;'>";
  } else {
    echo "❌ 檔案搬移失敗，請檢查權限或大小限制。";
  }
} else {
  echo "⚠️ 請選擇要上傳的圖片。";
}
?>
