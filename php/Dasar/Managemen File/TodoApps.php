<?php

$todos = []; //total array yang disiapkan untuk disimpan
if (file_exists('todo.txt')) {
    $file = file_get_contents('todo.txt'); //membaca file todo.txt
    $todos = unserialize($file); //mengubah format serialize menjadi array
}


//Jika ditemukan todo yang dikirim melalui method Post
if (isset($_POST['todo'])) {
    $data = $_POST['todo']; //mengambil data yang diinput pada form
    $todos[] = [
        'todo' => $data,
        'status' => 0
    ];
    $daftar_todo = serialize($todos); //Simpan daftar input todo dalam format serialize
    simpanData($daftar_todo);
}

//jika ditemukan $_GET['status']
if (isset($_GET['status'])) {
    //ubah status
    $todos[$_GET['key']]['status'] = $_GET['status']; //mengubah angka status menjadi 1
    $daftar_todo = serialize($todos);
    simpanData($daftar_todo);
}
//jika ditemukan perintah hapus
if (isset($_GET['hapus'])) {
    //hapus data sesuai key yang dipilih
    unset($todos[$_GET['key']]);
    $daftar_todo = serialize($todos);
    simpanData($daftar_todo);
}

function simpanData($daftar_todo)
{
    file_put_contents('todo.txt', $daftar_todo);
    //redirect ke halaman
    header('location:TodoApps.php');
}

print_r($todos);
?>
<h1>Todo App</h1>

<form action="" method="post">
    <label for="">Apa Kegiatanmu Hari Ini</label> <br>
    <input type="text" name="todo">

    <button type="submit">Simpan</button>
</form>

<ul>
    <?php foreach ($todos as $key => $value) : ?>
        <li>
            <input type="checkbox" name="todo" onclick="window.location.href='TodoApps.php?status=<?php echo ($value['status'] == 1) ? '0' : '1'; ?>&key=<?php echo $key; ?>'" ; <?php if ($value['status'] == 1) echo 'checked' ?>>
            <label><?php
                    if ($value['status'] == 1) {
                        echo '<del>' . $value['todo'] . '</del>';
                    } else {
                        echo $value['todo'];
                    }
                    ?></label>
            <a href='TodoApps.php?hapus=1&key=<?php echo $key; ?>' onclick="return confirm('Apakah Anda Yakin akan menghapus data ini ?')">hapus</a>
        </li>
    <?php endforeach; ?>
</ul>