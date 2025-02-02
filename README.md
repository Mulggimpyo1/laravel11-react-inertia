## 개발목적

라라벨11과 react / inertia 동작방법을 학습하기 위한 목적

## 준비사항

-   윈도우 환경에서 [xampp](https://www.apachefriends.org/download.html) php 8.1 이상 설치
-   윈도우 환경에서 [composer](https://getcomposer.org/download/) 설치

## 초기 세팅(프로젝트 생성)

vscode 터미널에서 아래와 같이 실행

```
composer create-project laravel/laravel [프로젝트명] "11.0.3" //라라벨 버전
```

```
composer require laravel/breeze --dev
```

```
php artisan breeze:install
```

1.  react 선택
2.  dark 선택
3.  기본 (enter)

## 실행

```
php artisan serve
```

```
npm run dev
```

localhost:8000 에서 확인가능

---

*thanks [The Codeholic](https://www.youtube.com/watch?v=VrQRa-afCAk) 튜토리얼 YOUTUBE
