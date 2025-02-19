<?php

namespace App\Filament\Resources;

use stdClass;
use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use Filament\Actions;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Widgets\PostOverview;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Actions\BulkActionGroup;
use Illuminate\Database\Eloquent\Collection;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\PostResource\Pages;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PostResource\Widgets\PostsOverview;
use Livewire\Component;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Berita';
    // $url = route('filament.resources.posts.index', ['activeTab' => 'Post']);

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    Select::make('category_id')->relationship('category', 'name')->required(),
                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))->required(),
                    TextInput::make('slug')->readOnly()->required(),
                    SpatieMediaLibraryFileUpload::make('attachments')
                        ->collection('img')
                        ->multiple()
                        ->responsiveImages()
                        ->reorderable(),
                    RichEditor::make('content')
                        ->toolbarButtons([
                            // 'attachFiles',
                            'blockquote',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ]),
                    // ->fileAttachmentsDisk('public')
                    // ->fileAttachmentsDirectory('post')
                    // ->fileAttachmentsVisibility('public'),
                    Toggle::make('status'),
                    Toggle::make('pin')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        return (string) (
                            $rowLoop->iteration +
                            ($livewire->getTableRecordsPerPage() * (
                                $livewire->getTablePage() - 1
                            ))
                        );
                    }
                ),
                TextColumn::make('title')->limit(50)->searchable()->sortable()->label('Judul'),
                TextColumn::make('category.name')->limit(50)->searchable()->sortable()->label('Kategori'),
                ToggleColumn::make('status')->label('Publish'),
                ToggleColumn::make('pin')->label('Sematkan')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Tables\Actions\ForceDeleteAction::make(),
                // Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    // Tables\Actions\ForceDeleteBulkAction::make(),
                    // Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            Tabs::make('Post Tabs')
                ->tabs([
                    Tabs\Tab::make('All')
                        ->visible(fn() => $this->getActiveTab() === 'All'),
                    Tabs\Tab::make('Post')
                        ->visible(fn() => $this->getActiveTab() === 'Post'),
                    Tabs\Tab::make('Draft')
                        ->visible(fn() => $this->getActiveTab() === 'Draft'),
                ]),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
    public static function getWidgets(): array
    {
        return [
            PostsOverview::class,
        ];
    }
}
