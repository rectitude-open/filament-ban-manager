# Changelog

## [1.10.2](https://github.com/rectitude-open/filament-ban-manager/compare/v1.10.1...v1.10.2) (2025-05-10)


### Miscellaneous Chores

* update dependabot fetch-metadata action to v2.4.0 ([79d6232](https://github.com/rectitude-open/filament-ban-manager/commit/79d62324f6190cae4b55b59c1def383a9f7d0a3e))

## [1.10.1](https://github.com/rectitude-open/filament-ban-manager/compare/v1.10.0...v1.10.1) (2025-05-04)


### Miscellaneous Chores

* remove commit message check ([124baf2](https://github.com/rectitude-open/filament-ban-manager/commit/124baf20e4597309cd146e43e48088e5005cb79c))

## [1.10.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.9.0...v1.10.0) (2025-05-04)


### Features

* add meta key filter to BanResource table ([3df9a0c](https://github.com/rectitude-open/filament-ban-manager/commit/3df9a0c7d5f89f72ae94d3420e3f1ad61941aebf))
* add metas fields to BanResource infolist ([4b333a9](https://github.com/rectitude-open/filament-ban-manager/commit/4b333a9f6e8652eb2c4985094e1f69ccb6310928))

## [1.9.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.8.0...v1.9.0) (2025-05-04)


### Features

* add infolist schema to BanResource and remove ViewBan page ([a8e1d30](https://github.com/rectitude-open/filament-ban-manager/commit/a8e1d300ecf7ea066131b154050cfa1384052d0c))
* enhance BanResource table columns with labels and formatting options ([38e9ce3](https://github.com/rectitude-open/filament-ban-manager/commit/38e9ce300b5aa34f8d5b0877ecea630d8dfc3e56))
* unify success notification title for unban actions ([af2d07d](https://github.com/rectitude-open/filament-ban-manager/commit/af2d07de4c32f77cc2f413179737ee528c8fd48b))


### Bug Fixes

* add validation rules for IP input in BanResource form ([6e452fa](https://github.com/rectitude-open/filament-ban-manager/commit/6e452fa0776ff3108ae459b4c5b62068f0f17dc9))

## [1.8.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.7.0...v1.8.0) (2025-05-02)


### Features

* add validation for CreateAction ([c1b2458](https://github.com/rectitude-open/filament-ban-manager/commit/c1b2458de75d131c0166f7ee193cce1d08dd28c2))
* auto set created_by on creation ([ad2ef50](https://github.com/rectitude-open/filament-ban-manager/commit/ad2ef5087980e3efa77f14e8fc34a603ea5397d6))
* change created_by display in form ([03c5e4b](https://github.com/rectitude-open/filament-ban-manager/commit/03c5e4bc774ca6789573d58ab5955422e53ea682))


### Bug Fixes

* ensure default sort order is applied in BanResource table ([a2b6a20](https://github.com/rectitude-open/filament-ban-manager/commit/a2b6a20fe60f94cb791ac309e42e77e13bd48b22))

## [1.7.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.6.0...v1.7.0) (2025-04-30)


### Features

* add expired_at_date_format ([ceb4b79](https://github.com/rectitude-open/filament-ban-manager/commit/ceb4b79995660a4a670f3a7a86a15f6935d98876))
* add filters for bannable type and ID ([4117537](https://github.com/rectitude-open/filament-ban-manager/commit/4117537bce73b57474fb3a8439b3016250f0ef9d))
* add navigation_icon config ([4f33358](https://github.com/rectitude-open/filament-ban-manager/commit/4f33358c3b7bebe1644869b7c343f0b2d9f4ab73))
* add Type filter ([5b1c55a](https://github.com/rectitude-open/filament-ban-manager/commit/5b1c55a0672c1687b237b55e9455f62572adc15f))


### Miscellaneous Chores

* typo fix ([95c83c3](https://github.com/rectitude-open/filament-ban-manager/commit/95c83c362458ec99d6e9a88c3986826be0fe742f))

## [1.6.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.5.0...v1.6.0) (2025-04-29)


### Features

* change namespace name ([6d5f2ac](https://github.com/rectitude-open/filament-ban-manager/commit/6d5f2ac10d2838059bf66a53ce64ed258575873d))


### Bug Fixes

* update condition to prevent job execution for merged pull requests ([d655ae2](https://github.com/rectitude-open/filament-ban-manager/commit/d655ae28aab7c014d4a4406ecb355c8c0f2a3842))

## [1.5.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.4.0...v1.5.0) (2025-04-29)


### Features

* use config for table name in create_bans_table migration ([d9867d4](https://github.com/rectitude-open/filament-ban-manager/commit/d9867d41c337c7b920e99816833c0e5c3b562889))


### Bug Fixes

* workflow job name ([71b0cda](https://github.com/rectitude-open/filament-ban-manager/commit/71b0cdaef2115316fc2be2e1b2fab0a69a1454ac))

## [1.4.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.3.0...v1.4.0) (2025-04-29)


### Features

* add Ban Model to override fillable ([a0de807](https://github.com/rectitude-open/filament-ban-manager/commit/a0de80739be22e6b5d6aa5459418a3d2ece3f018))
* enhance BanResource table columns with labels, searchability, and formatting ([d22ccd4](https://github.com/rectitude-open/filament-ban-manager/commit/d22ccd4b1ea3148d7437f687b179775b314825cf))


### Bug Fixes

* correct syntax for conditional check in Laravel Pint workflow ([e031122](https://github.com/rectitude-open/filament-ban-manager/commit/e0311228cc21d34f4801f19f641cb107663d6b62))

## [1.3.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.2.2...v1.3.0) (2025-04-29)


### Features

* support support for dynamic filament resource ([c2870e9](https://github.com/rectitude-open/filament-ban-manager/commit/c2870e98e29978d9bcc52289681939fae2585a35))


### Bug Fixes

* add export-ignore for filament-ban-manager-docker and dev directories ([8dfb206](https://github.com/rectitude-open/filament-ban-manager/commit/8dfb206678bdc322e2ae01414ce0dda401cc3e10))
* improve packageRegistered method and correct migration filename format ([d62ba38](https://github.com/rectitude-open/filament-ban-manager/commit/d62ba38305fe8121a1d33ec60464ae6938d18475))
* rename configuration file ([da03a1f](https://github.com/rectitude-open/filament-ban-manager/commit/da03a1f18f30c2a08ca05c7d72cbc8e08854bbaf))
* update workflow names for consistency and improve PHPStan level ([e900611](https://github.com/rectitude-open/filament-ban-manager/commit/e90061134b40c8c7b38253b4c599d7f276a64f66))

## [1.2.2](https://github.com/rectitude-open/filament-ban-manager/compare/v1.2.1...v1.2.2) (2025-04-28)


### Bug Fixes

* set default model for BanResource if not configured ([42c168e](https://github.com/rectitude-open/filament-ban-manager/commit/42c168ee5850f9a6b2b738ae7362adb4648b2fe0))
* simplify condition for Laravel Pint Check to exclude GitHub Actions bot ([77c4c4f](https://github.com/rectitude-open/filament-ban-manager/commit/77c4c4f16028bda034b21fbfb3cc95c20e0eb4ec))

## [1.2.1](https://github.com/rectitude-open/filament-ban-manager/compare/v1.2.0...v1.2.1) (2025-04-28)


### Bug Fixes

* simplify OS and stability matrix in run-tests workflow ([429979c](https://github.com/rectitude-open/filament-ban-manager/commit/429979c767f6cb69b49224ab80ce7a05d1030919))
* update condition to exclude 'autorelease: pending' from Laravel Pint Check ([07d39c4](https://github.com/rectitude-open/filament-ban-manager/commit/07d39c4e9a4fb6368f9e6cacb72b0639d44de76d))

## [1.2.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.1.1...v1.2.0) (2025-04-28)


### Features

* add migration for bans table and update service provider ([ba48e75](https://github.com/rectitude-open/filament-ban-manager/commit/ba48e75bcc35191085ead64daff7d00db5ddda3f))
* exclude autorelease pr for ci ([07b2fdd](https://github.com/rectitude-open/filament-ban-manager/commit/07b2fdddc212c9b6798ba12a1c0c4952bcfd1966))

## [1.1.1](https://github.com/rectitude-open/filament-ban-manager/compare/v1.1.0...v1.1.1) (2025-04-28)


### Bug Fixes

* update larastan dependency in require-dev section ([91a753a](https://github.com/rectitude-open/filament-ban-manager/commit/91a753a96d10cd3a4b159901c761fc2062630e8a))

## [1.1.0](https://github.com/rectitude-open/filament-ban-manager/compare/v1.0.0...v1.1.0) (2025-04-28)


### Features

* add GitHub Actions workflow for automated releases ([c254bcc](https://github.com/rectitude-open/filament-ban-manager/commit/c254bcc2f16365ab53555cdf5b3d8602b2e9b53b))
