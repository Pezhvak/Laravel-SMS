# Laravel-SMS

[![Join the chat at https://gitter.im/Pezhvak/Laravel-SMS](https://badges.gitter.im/Pezhvak/Laravel-SMS.svg)](https://gitter.im/Pezhvak/Laravel-SMS?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
Laravel SMS Service Provider

## Installation

Run the following command in your laravel directory:

```composer require pezhvak/laravel-sms```

## Setup

1. In `/config/app.php`, add the following to `providers`:
  
  ```
  Pezhvak\SMS\SmsServiceProvider::class,
  ```
  and the following to `aliases`:
  ```
  'SMS' => Pezhvak\SMS\Facades\SMS::class,
  ```
2. Run `php artisan vendor:publish`.
3. Enter your api data in `/config/SMS.php`.

## Usage
