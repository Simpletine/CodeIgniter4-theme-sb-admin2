# SimpleTine Theme Collection

## StartBootstrap SB Admin 2
[Official Site](https://startbootstrap.com/theme/sb-admin-2) | [Official GitHub](https://github.com/startbootstrap/startbootstrap-sb-admin-2)

## Setup Manually
1. Follow instruction at [CodeIgniter 4 Installation](/CODEIGNITER4.md)
2. Install CodeIgniter 4 package
`composer create-project codeigniter4/appstarter newProject`
3. Open project folder, then open **Public** Folder
`git clone https://github.com/startbootstrap/startbootstrap-sb-admin-2`
4. Copy `login.html` and `index.html` to `App/Views`
5. Change the view at `App/Controllers/Home.php`.
6. Run `php spark serve` for run the app

## Basic Spark Tips
- New config `php spark make:config myConfig`
- New controller `php spark make:controller myController`
- New model `php spark make:model myModel`
- New validation `php spark make:validation myValidation`
- Clear log files `php spark logs:clear`
- Clear debugbar JSON files `php spark debugbar:clear`