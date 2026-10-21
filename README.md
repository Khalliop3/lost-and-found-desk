HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Lost & Found Desk

Sistema web de gestión de objetos perdidos y encontrados para entornos institucionales.

Permite a los usuarios reportar objetos perdidos o encontrados, al personal técnico gestionar el inventario físico y validar reclamaciones, y a los administradores supervisar el sistema mediante dashboards, políticas de retención y auditoría.

---

## Descripción del Proyecto

**Lost & Found Desk** es una plataforma desarrollada con Laravel que digitaliza el proceso completo de objetos perdidos y encontrados:

- Reporte de objetos perdidos y encontrados (con fotografía)
- Inventario físico en almacén
- Algoritmo de coincidencia (matching) entre objetos
- Validación de reclamaciones
- Agendamiento de recolección
- Notificaciones automáticas
- Dashboard de KPIs y bitácora de auditoría
- Políticas automáticas de retención/descarte

El sistema está orientado a instituciones educativas, oficinas o cualquier organización que gestione un área de objetos perdidos.

---

## Características Principales

- Autenticación segura con JWT
- Roles diferenciados: Usuario, Técnico de Soporte y Administrador
- Subida de imágenes (Cloudinary / S3)
- Motor de coincidencias configurable
- Notificaciones por correo e in-app
- Gestión completa de inventario físico
- Dashboard de métricas y auditoría
- Optimizado para PostgreSQL
- Preparado para Docker y CI/CD

---

## Stack Tecnológico

| Capa              | Tecnología                          |
|-------------------|-------------------------------------|
| Backend           | Laravel 12 / 13 (PHP 8.3+)          |
| Base de Datos     | PostgreSQL                          |
| Autenticación     | JWT                                 |
| Almacenamiento de imágenes | Cloudinary o AWS S3            |
| Frontend          | Blade + Vite (o API + frontend separado) |
| Contenedores      | Docker                              |
| Despliegue        | Render / Vercel + CI/CD             |

---

## Requisitos

- PHP >= 8.3
- Composer
- PostgreSQL
- Node.js & npm (para assets)
- Git

---
