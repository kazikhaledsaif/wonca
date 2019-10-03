<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
</head>

<body>
<h2>Congratulations!! {{ $user['f_name'].' '.$user['l_name'] }}</h2>
<br/>

<p>
    You are now listed as proud delegates of 17th WRHC2020 Dhaka,Bangladesh. <br><br>
    <a href="">Click here </a> for payment by secure online transaction using Visa/Master-Card and other local bank account.
    <br>
    You can also make your payment via Bank Transaction.
    <br><br>
    <h4>Registration no. <b>#{{ $user['id'] }}</b></h4> <br><br>

    <pre>
    Thanks & Best Regards,
    17th World Rural Health Conference, Dhaka
    </pre>
        </p>
</body>

</html>
