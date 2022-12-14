<?php

namespace Lkt\CodeMaker\Tests;

use Lkt\CodeMaker\QueryCallerMaker;
use Lkt\CodeMaker\Tests\Assets\Generated\TestWhere;
use Lkt\CodeMaker\Tests\Assets\TestClass;
use Lkt\CodeMaker\WhereMaker;
use Lkt\Factory\Schemas\Fields\BooleanField;
use Lkt\Factory\Schemas\Fields\ColorField;
use Lkt\Factory\Schemas\Fields\DateTimeField;
use Lkt\Factory\Schemas\Fields\EmailField;
use Lkt\Factory\Schemas\Fields\FileField;
use Lkt\Factory\Schemas\Fields\FloatField;
use Lkt\Factory\Schemas\Fields\ForeignKeyField;
use Lkt\Factory\Schemas\Fields\ForeignKeysField;
use Lkt\Factory\Schemas\Fields\HTMLField;
use Lkt\Factory\Schemas\Fields\IdField;
use Lkt\Factory\Schemas\Fields\ImageField;
use Lkt\Factory\Schemas\Fields\IntegerField;
use Lkt\Factory\Schemas\Fields\JSONField;
use Lkt\Factory\Schemas\Fields\PivotField;
use Lkt\Factory\Schemas\Fields\RelatedField;
use Lkt\Factory\Schemas\Fields\RelatedKeysField;
use Lkt\Factory\Schemas\Fields\StringField;
use Lkt\Factory\Schemas\Fields\UnixTimeStampField;
use Lkt\Factory\Schemas\InstanceSettings;
use Lkt\Factory\Schemas\Schema;
use PHPUnit\Framework\TestCase;

class QueryCallerMakerTest extends TestCase
{
    public function testTemplateEngine()
    {
        $component = 'maker-test-component';
        Schema::add(
            Schema::table('test-table', $component)
                ->setInstanceSettings(InstanceSettings::define(TestClass::class)
                    ->setClassNameForGeneratedClass('GeneratedTestClass')
                    ->setNamespaceForGeneratedClass('Lkt\CodeMaker\Tests\Assets\Generated')
                    ->setWhereStoreGeneratedClass(__DIR__ . '/Assets/Generated')
                    ->setQueryCallerClassName('TestQueryCaller')
                    ->setWhereClassName('TestWhere')
                )
            ->addField(IdField::define('id'))
            ->addField(StringField::define('name'))
            ->addField(HTMLField::define('description'))
            ->addField(IntegerField::define('age'))
            ->addField(EmailField::define('emailAddress', 'email_address'))
            ->addField(BooleanField::define('isReady'))
            ->addField(FloatField::define('price'))
            ->addField(DateTimeField::define('createdAt'))
            ->addField(UnixTimeStampField::define('moment'))
            ->addField(ForeignKeysField::define('properties')->setComponent('maker-test-component'))
            ->addField(ForeignKeyField::define('mainProperty')->setComponent('maker-test-component'))
            ->addField(RelatedField::define('relatedData')->setComponent('maker-test-component'))
            ->addField(RelatedField::define('relatedDataSingle')->setComponent('maker-test-component')->setSingleMode())
            ->addField(RelatedKeysField::define('relatedKeysData')->setComponent('maker-test-component'))
            ->addField(PivotField::define('pivotData')->setComponent('maker-test-component'))
            ->addField(FileField::define('file'))
            ->addField(ImageField::define('image')->setPublicPath('/api/file'))
            ->addField(ColorField::define('favouriteColor'))
            ->addField(JSONField::define('settings'))
            ->addField(JSONField::define('additionalSettings')->setIsAssoc())
        );

        WhereMaker::generate();
        QueryCallerMaker::generate();

        $where = TestWhere::getEmpty()->andIdBetween(1, 5)->andNameLike('james')->andNameNot('james.');
        $this->assertEquals("(id BETWEEN '1' AND '5' AND name LIKE '%james%' AND name!='james.')", $where->whereConstraintsToString());

        $whereStatic = TestWhere::idBetween(1, 5)->andNameLike('james')->andNameNot('james.');
        $this->assertEquals("(id BETWEEN '1' AND '5' AND name LIKE '%james%' AND name!='james.')", $whereStatic->whereConstraintsToString());
    }
}