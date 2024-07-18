<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEwAIBADANBgkqhkiG9w0BAQEFAASCBKowggSmAgEAAoIBAQDlsJMgbkATV1e9'."\n".'xwNyOfo80Jm0HWFtXJvd9I4QRnho7VLZFJEwWjbNJuCszy8gJX2k50RoCQwGbncp'."\n".'ToOIAEjSHtPijMImGMXzjjSlkUX82eXigafJ0miB1yaHFX8wWH8cNw4bqaByx+Hy'."\n".'PLKoJEIWgoMUXTypmGcs0DPiNvIW9q/1SePcR9Xpt4JAJ4CAILgGMd/O4ms/j3yZ'."\n".'y9dXMXT8TJdnjJ1HrSwsCBy+pciWYUXQmGUY/crAMfAKMlknbvFkKQ/VNvIlkvJl'."\n".'e5jyCNT6EJaybXBvOBY74lEDBFbyB7YiVb903YUMX1G3WBgEk24uaAWmU4u/1Skh'."\n".'g7dHrDbpAgMBAAECggEBALl03RaubmYve9Trv8iXL4mzFKftoSDgSanpMFvLyqVO'."\n".'GjrU9HYKIX18CqT9lJtsKgrgAMfPpjn7L5PWpTVGpYWjBopCBPElx49kHvYgWlZS'."\n".'yd8duRCoJ2HPCni/zraGffuWKHoFeFu1MKaag9ZnkEUElDn5HmYBfC0e3wWkP8xx'."\n".'UoQSZq4G5dpY8bW9E3VbNGcYqnRgP47JY+vNHVhTKW3Hs8BGnDOgaIpo4Tosj4kP'."\n".'yHredNULKD1ao4gM/BePAMzBO2Rr4rmh0xDPBWvCpIrybBTH1rJNEMutnPOrj2fb'."\n".'YAicX3F4NupaZA2/4Rt/znAIovRbcp0GcHv2U0QjRAECgYEA/wg2a8Tj1H9un7XX'."\n".'ceuq43Mt2MqKbfXQTCDQnHR2xNhfHfVdILFYQt4vgSBheSkxeFKJTcl6QJtTj6IH'."\n".'JXV4XudmgjhhfBvped3YeVKNpNNL5cnujAuwRkGBpQxe2zwTKZw/p3QuBG0HJoCN'."\n".'xcFNgvG2d4jc5tAxdJvSiJJMYEkCgYEA5o+9XH6ButqWO3dpiXgUBQ7NN3fH/usT'."\n".'ODAjOU+s4cqieu+rBhtjnhwz7dPhiEXtDVvP5AggYHBw/4BWEIzj5XepJN/twFIN'."\n".'koaBNYPsqdNUehHyYkxUTaSA8mV9KMrwKBv7AGKRFINRNcKG++GLQ9kYpSNzZfHm'."\n".'A+PhmnvoYaECgYEAsB0yv586mb7aXM4NFm1hGCqsyV2s1JyAmGG8zZ4bennUzXJo'."\n".'OjBdu+eFNI1w4mOQ9v9ANAhjNQROYwzIFJUXZ6oyftCCeVspEvAhEj7w85a6fdfB'."\n".'tNJJi2qnJZvyUUEeFokA6BlxwbqsymjR/nMrnLZghBFuQrIYxObqL0egGIkCgYEA'."\n".'itinNcttfsRiUp9/6+xnSgB2719wDoEsitraa4oi17r7DEPG35+g5zeewiumFzXd'."\n".'Iv1WfcGzFcDBG+0CZ2chWzArqWw9NmNzjvj3WO4AmOkOZ5DlQfMrlbJqgQ9DR0yn'."\n".'QdBP4RR6wDqwrkpeldNm1c4ofFKUDSGW3mLemvThpeECgYEA2m1NfqXG9+N4idf1'."\n".'9LklKy9CZ09/Rlmx5UrVaW5t6zlHf/Qs/j4s7qWjbsRyKPTm7BsY1Ze1GX/p1ENq'."\n".'PaZ5aGWAyty7qmsCmmiC+YMMZKePur9sBrg5TLu517BY9pUtp9JSNpFsyBWlj92e'."\n".'Q+HPD3AhoH3WTLgjXrHpYabv/ic='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000d177ed176a8d8efaa92a1107dd46eb25d12b1c60a26d7da65db01af9f9bf50f8ce037549535c95d61849ed3d81d79386bdbe998a28bf0ad2760ed08688e1370e');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);
