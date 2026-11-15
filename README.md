# Casper Ndrih — CV & Portfolio

A Laravel 11 personal portfolio and CV website. The portfolio homepage is public. LinkedIn OpenID Connect is required only when a visitor requests the CV download.

## Stack
- PHP 8.2+ and Laravel 11
- Laravel Socialite (LinkedIn OpenID Connect)
- SQLite by default; MySQL can be configured
- Tailwind CSS 3, Flowbite, Laravel Mix 6
- DomPDF for generated hire-request PDFs

## Features
- Public portfolio homepage, skills, experience and project highlights.
- LinkedIn sign-in only for the protected CV download.
- LinkedIn visitor records and login statistics.
- Hire-me request form with PDF generation.
- Responsive light/dark presentation and Lottie animations.

## Requirements
- PHP 8.2+ with OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, Fileinfo and DOM extensions.
- Composer 2.
- Node.js 20+ and npm.
- Apache with mod_rewrite for the included direct-CV access rule, or an equivalent Nginx rule.

## Local installation
1. Clone the repository and enter the project directory.
2. Install dependencies:

       composer install
       npm ci

3. Create the environment file and application key:

       cp .env.example .env
       php artisan key:generate

4. Configure .env:
   - Set APP_URL to the URL where the site is hosted.
   - Set database connection and credentials if not using SQLite.
   - Set LINKEDIN_CLIENT_ID, LINKEDIN_CLIENT_SECRET, and LINKEDIN_REDIRECT_URI.
   - Keep APP_DEBUG=false in production.
   - Use HTTPS and set SESSION_SECURE_COOKIE=true in production.

5. Create the SQLite file when using SQLite, then run migrations:

       touch database/database.sqlite
       php artisan migrate

6. Compile frontend assets:

       npm run production

7. Start the local server:

       php artisan serve

Open http://127.0.0.1:8000.

## LinkedIn OpenID Connect setup
1. Create or configure an application in the LinkedIn Developer Portal.
2. Enable the Sign In with LinkedIn using OpenID Connect product.
3. Add the exact redirect URL configured in LINKEDIN_REDIRECT_URI, for example:

       https://your-domain.example/auth/linkedin/callback

4. Add credentials to the server environment only:

       LINKEDIN_CLIENT_ID=your-client-id
       LINKEDIN_CLIENT_SECRET=your-client-secret
       LINKEDIN_REDIRECT_URI=https://your-domain.example/auth/linkedin/callback

The application requests the openid, profile, and email scopes. Never commit a real .env file or place the client secret in frontend JavaScript.

## CV download protection
- The homepage route / is public.
- /view-cv checks the Laravel authenticated session. Guests are sent to LinkedIn and returned to their originally requested CV URL after successful authentication.
- The PDF is served by Laravel as an attachment with private/no-cache headers.
- The included public/.htaccess denies direct HTTP requests to /doc/. This requires Apache mod_rewrite and .htaccess overrides to be enabled.

Nginx deployments must add an equivalent rule inside the relevant server block:

    location ^~ /doc/ {
        deny all;
        return 403;
    }

Keep the CV file at public/doc/cv.pdf for the current controller implementation. Do not expose the document through another public alias or CDN URL. If you change the file location, update FrontendController::downloadCv() accordingly.

## Production deployment checklist
- Set APP_ENV=production, APP_DEBUG=false, a strong APP_KEY, and the correct HTTPS APP_URL.
- Set SESSION_DRIVER=file (or provision a real sessions table before using the database driver).
- Set SESSION_SECURE_COOKIE=true and keep SESSION_HTTP_ONLY=true.
- Configure the LinkedIn callback URL to exactly match the LinkedIn Developer Portal.
- Run composer install --no-dev --optimize-autoloader.
- Run npm ci && npm run production.
- Run php artisan migrate --force.
- Ensure storage/ and bootstrap/cache/ are writable by the web-server user.
- Point the web-server document root at the repository's public/ directory.
- Verify that /doc/cv.pdf returns 403 and /view-cv redirects a signed-out visitor to LinkedIn.
- Clear and rebuild caches:

      php artisan optimize:clear
      php artisan config:cache
      php artisan route:cache
      php artisan view:cache

## Tests
Run the feature and unit test suites:

    php artisan test

GitHub Actions runs the PHP test suite and compiles production frontend assets on pushes and pull requests to main.

## Important credential note
If a LinkedIn client secret was ever included in an earlier archive or commit, rotate it in the LinkedIn Developer Portal. Removing a file from the latest branch does not erase it from Git history. Store the replacement only in the hosting environment or GitHub Actions secrets.

## License
This project is distributed under the MIT License. See LICENSE.
