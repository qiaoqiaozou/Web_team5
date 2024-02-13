<?php
session_start();

// 如果用户已登录，则重定向到主页
if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// 定义用于清理输入数据的函数
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// 如果是通过 POST 请求提交的表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once('db.php');

    // 清理并获取用户输入的邮箱和密码
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);

    // 查询数据库中是否存在匹配的用户
    $query = "SELECT * FROM register_info WHERE email='$email'";
    $result = $conn->query($query);

    // 如果找到了匹配的用户
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // 使用密码哈希验证密码是否正确
        if(password_verify($password, $row['password'])) {
            // 登录成功，设置用户会话并重定向到主页
            $_SESSION['user_id'] = $row['id'];
            header("Location: index.php");
            exit();
        } else {
            // 密码错误，设置错误消息
            $error = "Error: Invalid email or password";
        }
    } else {
        // 没有找到匹配的用户，设置错误消息
        $error = "Error: Invalid email or password";
    }

    // 关闭数据库连接
    $conn->close();
}

// 包含页面的页脚部分
$title = "Log_In";
$md = "Please use appropriate meta Description";
$css = "styles_YangPengpeng.css";
include 'header.php';
?>

<!-- 显示错误消息 -->
<?php if (!empty($error)) : ?>
    <div class="alert alert-danger"><?php echo $error = 'Invalid email or password. Please try again.'; ?></div>
<?php endif; ?>


<?php include 'footer.php'; ?>
