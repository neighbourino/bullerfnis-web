<?php

namespace App\Filament\Pages;

use App\Models\Article;
use Filament\Pages\Page;
use EchoLabs\Prism\Prism;
use Livewire\Attributes\Session;
use EchoLabs\Prism\Enums\Provider;
use EchoLabs\Prism\Schema\ObjectSchema;
use EchoLabs\Prism\Schema\StringSchema;
use EchoLabs\Prism\Schema\ArraySchema;
use EchoLabs\Prism\Schema\NumberSchema;

class ArticleGenerator extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.article-generator';

    protected static ?string $navigationGroup = 'Generators';


    ##[Session(key: 'article_maker.response')]
    public $response;

    ##[Session(key: 'article_maker.prompt')]
    public $prompt;

    public function generateResponse()
    {

        $schema = new ObjectSchema(
            name: 'fact_category',
            description: 'A structured fact category with facts.',
            properties: [
                new StringSchema('title', 'The title of the category'),
                // new StringSchema('source', 'The source of the fact', nullable: true),
                // new StringSchema('content', 'Fact content'),

            ],
            requiredFields: ['title']
        );

        #dd($schema);

        try {
            $response = Prism::structured()
                //->using(Provider::Ollama, 'qwen2.5:14b') // qwen2.5:14b
                ->using(Provider::OpenAI, 'gpt-4o-mini')
                ->withSchema($schema)
                ->withMaxSteps(4)
                ->withClientOptions(['timeout' => 3000])
                ->withPrompt('Generer på dansk, 5 facts omkring emnet ' . $this->prompt . '')
                ->generate();

            #dd($response);
        } catch (\Throwable $th) {
            throw $th;
        }

        #$this->response = $response->text;
        $articleDraft = $response->structured;

        dd($articleDraft);

        Article::create([
            'title' => $articleDraft['title'],
        ]);

        $this->response = $articleDraft;
    }
}
