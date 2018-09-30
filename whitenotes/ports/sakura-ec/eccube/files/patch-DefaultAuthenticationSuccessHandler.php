--- vendor/symfony/security/Http/Authentication/DefaultAuthenticationSuccessHandler.php.orig	2015-07-10 01:07:40.000000000 +0900
+++ vendor/symfony/security/Http/Authentication/DefaultAuthenticationSuccessHandler.php	2015-10-07 18:20:45.000000000 +0900
@@ -115,7 +115,10 @@
         if (null !== $this->providerKey && $targetUrl = $request->getSession()->get('_security.'.$this->providerKey.'.target_path')) {
             $request->getSession()->remove('_security.'.$this->providerKey.'.target_path');
 
-            return $targetUrl;
+            if (!preg_match('/\/login$/', $_SERVER['HTTP_REFERER'])) {
+                return $targetUrl;
+            }
+
         }
 
         if ($this->options['use_referer'] && ($targetUrl = $request->headers->get('Referer')) && $targetUrl !== $this->httpUtils->generateUri($request, $this->options['login_path'])) {
