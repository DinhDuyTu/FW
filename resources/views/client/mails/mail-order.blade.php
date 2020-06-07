<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    table.orderMail tr td {
      border: 1px solid black
    }
    table.orderMail tr td:first-child {
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div style="margin: 0 20%;">
    <table class="orderMail">
      <tr>
        <td style="width: 150px; font-weight: bold;">#Name</td>
        <td style="width: 500px;">{{ $name }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Phone</td>
        <td>{{ $phone }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Email</td>
        <td>{{ $email }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Address</td>
        <td>{{ $address }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Note</td>
        <td>{{ $note }}</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Product</td>
        <td></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Price</td>
        <td></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Quantity</td>
        <td></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Size</td>
        <td></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">#Color</td>
        <td></td>
      </tr>
    </table>
  </div>
</body>
</html>