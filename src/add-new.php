<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
    // تنظيف البيانات للأمان
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    // استعلام آمن
    $sql = "INSERT INTO crud (firstname, lastname, email, gender) 
            VALUES ('$firstname', '$lastname', '$email', '$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=تم إضافة السجل بنجاح!");
        exit();
    } else {
        $error = "فشل في الإضافة: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>إضافة مستخدم جديد - PHP CRUD</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP Complete CRUD Application
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>إضافة مستخدم جديد</h3>
            <p class="text-muted">املأ النموذج لإضافة مستخدم جديد</p>
        </div>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <div class="d-flex justify-content-center">
            <form action="" method="POST" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">الاسم الأول</label>
                        <input type="text" class="form-control" name="firstname" required>
                    </div>
                    <div class="col">
                        <label class="form-label">الاسم الأخير</label>
                        <input type="text" class="form-control" name="lastname" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">البريد الإلكتروني</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">الجنس</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                        <label class="form-check-label" for="male">ذكر</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                        <label class="form-check-label" for="female">أنثى</label>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-success me-2">
                    <i class="fa-solid fa-save"></i> حفظ
                </button>
                <a href="index.php" class="btn btn-danger">
                    <i class="fa-solid fa-times"></i> إلغاء
                </a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
