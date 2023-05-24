<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/edit.css") }}">
    <title>編集</title>
</head>
    <table class="form-table">
        <tbody>
            <tr>
                <th>タイトル</th>
                <td><input type="text" size="60" value="">
                </td>
            </tr>
            <tr>
                <th>日付</th>
                <td><input type="date" size="60" value="">
                </td>
            </tr>
            </tr>
            <tr>
                <th>詳細</th>
                <td><textarea name="content" id="" cols="30" rows="10" placeholder="お問い合わせ内容"></textarea>
                </td>
            </tr>
            <button type="Submit">送信</button>
        </tbody>
    </table>
</html>
