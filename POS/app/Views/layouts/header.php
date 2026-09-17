<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?> | POS</title>
    <style>
        :root { font-family: Arial, sans-serif; }
        body { background: #f4f6f8; color: #1f2937; margin: 0; }
        header { background: #17324d; color: #fff; padding: 1rem 2rem; }
        header h1 { margin: 0 0 .75rem; font-size: 1.35rem; }
        nav { display: flex; flex-wrap: wrap; gap: 1rem; }
        nav a { color: #fff; text-decoration: none; }
        nav a:hover, nav a:focus { text-decoration: underline; }
        main { margin: 2rem auto; max-width: 960px; padding: 0 1rem; }
        .card { background: #fff; border-radius: .5rem; box-shadow: 0 2px 8px #00000012; padding: 2rem; }
        .actions { display: flex; flex-wrap: wrap; gap: .75rem; margin-top: 1.5rem; }
        .button { background: #2563eb; border-radius: .35rem; color: #fff; display: inline-block; padding: .7rem 1rem; text-decoration: none; }
        table { border-collapse: collapse; margin-top: 1.5rem; width: 100%; }
        th, td { border-bottom: 1px solid #e5e7eb; padding: .85rem .75rem; text-align: left; }
        th { background: #eef2ff; }
        footer { color: #6b7280; font-size: .9rem; margin: 2rem auto; max-width: 960px; padding: 0 1rem; }
    </style>
</head>
<body>
<header>
    <h1>Point of Sale</h1>
    <nav aria-label="Main navigation">
        <a href="<?= site_url('/') ?>">Home</a>
        <a href="<?= site_url('about') ?>">About</a>
        <a href="<?= site_url('customers') ?>">Customer Accounts</a>
        <a href="<?= site_url('users') ?>">User Accounts</a>
    </nav>
</header>
<main>
