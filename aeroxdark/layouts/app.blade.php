<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('themes/aeroxdark/style.css') }}">
</head>
<body>

<div class="sidebar">
    <div class="logo">{{ config('app.name') }}</div>

    <a href="/dashboard">Dashboard</a>
    <a href="/services">Services</a>
    <a href="/orders">Orders</a>
    <a href="/invoices">Invoices</a>
    <a href="/tickets">Tickets</a>
</div>

<div class="main">
    @yield('content')
</div>

</body>
</html>
