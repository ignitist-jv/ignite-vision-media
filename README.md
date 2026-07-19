# ignite-vision-media

Source for **ignitevisionmedia.com** (Ignitist Pte Ltd affiliate hub).

Seeded 2026-07-19 by mirroring the live site. Layout mirrors the server web root:

- `homepage/` — `index.php`, `affiliate.php`, `contact.php`, `images/`, `template-assets/`, `css/`
- `content/` — legal pages (privacy, refund, terms)

## Deploy

Push to `main` triggers `.github/workflows/deploy.yaml`, which FTP-syncs the repo
root onto the site web root.

Required repo **secrets** (Settings → Secrets and variables → Actions):

| Secret | Value |
|---|---|
| `FTP_SERVER` | FTP host, e.g. `ftp.ignitevisionmedia.com` |
| `FTP_USERNAME` | FTP username |
| `FTP_PASSWORD` | FTP password |
| `FTP_SERVER_DIR` | Remote web root, must end with `/` (e.g. `/public_html/`) |

Optional repo **variables**: `FTP_PROTOCOL` (`ftp`/`ftps`/`sftp`, default `ftps`), `FTP_PORT` (default `21`).
