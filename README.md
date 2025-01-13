# OCCU Exercise

#### System Requirements

- PHP 8
- Windows

------------


#### PHP Installation

1. Download PHP: Go to the PHP downloads page and download the PHP 8.2 zip file for Windows. Look for the "VS16 x64 Thread Safe (2024-Dec-17 14:59:22)" version.

	https://windows.php.net/download#php-8.2

2. Extract the Files: Extract the downloaded zip file to a directory on your computer, such as C:\Program Files\php.

3. Open the php directory, and find php.ini-development. Change the file name to php.ini. Open that file in a text editor and search for:
    - extension_dir= "ext"
    - extension=curl
    - extension=fileinfo
	- extension=mbstring
    - extension=mysqli
    - extension=openssl
    - extension=pdo_mysql
    - extension=pdo_odbc
    - extension=pdo_sqlite
    - extension=zip

    and remove the semicolon (;) from the front of each of those. Save and close.

4. Add PHP to PATH: Add the PHP directory to your systems PATH environment variable. Press the Windows key, type "environment", and select "Edit the system environment variables". In the System Properties window, click on the "Advanced" tab and then click "Environment variables...". In the Environment Variables window, find the PATH variable under "System variables", select it, and click "Edit". Click "Browse..." and navigate to the PHP directory (e.g., C:\Program Files\PHP). Click "OK" to close all the dialog boxes.

5. Test the Installation: Open the Command Prompt (CMD) and type php -v. You should see information about your installed PHP version.
6. Inside the project path (/occu_exercise), run this command
    ```php
    php composer.phar install
    ```
    This may take a couple minutes.
------------


#### Running Code

In the CMD, navigate to where this repo was downloaded to. Run this command to start a local server:
 `php -S localhost:8080 -t public`

Replace 8080 with another port number if that port is taken.
Open a browser and navigate to https://localhost:8080

------------


#### Troubleshooting
- php -v gives errors/warning: Please make sure all the correct extensions listed above have the semicolon (;) remove from the front.
