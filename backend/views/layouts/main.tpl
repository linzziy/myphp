{use class="backend\assets\AppAsset"}
{use class="yii\helpers\Html"}
{use class="yii\bootstrap\Nav"}
{use class="yii\bootstrap\NavBar"}
{use class="yii\widgets\Breadcrumbs"}
{AppAsset::register($this)|void}{$this->beginPage()}
<!DOCTYPE html>
<html lang="{$app->language}">
<head>
    <meta charset="{$app->charset}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{$this->title}</title>
    {$this->head()}
</head>
<body>
    {$this->beginBody()}
    <div class="wrap">
        <div class="container">
            {$content}
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company {date('Y')}</p>
            <p class="pull-right">{Yii::powered()}</p>
        </div>
    </footer>
    {$this->endBody()}
</body>
</html>
{$this->endPage()}