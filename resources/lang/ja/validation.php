<?php
/**
 * Validation Lines
 * The following language lines contain the default error messages used by
 * the validator class. Some of these rules have multiple versions such
 * as the size rules. Feel free to tweak each of these messages here.
 */
return [

    // Standard laravel validation lines
    'accepted'             => ':attributeに同意する必要があります。',
    'active_url'           => ':attributeは正しいURLではありません。',
    'after'                => ':attributeは:date以降である必要があります。',
    'alpha'                => ':attributeは文字のみが含められます。',
    'alpha_dash'           => ':attributeは文字, 数値, ハイフンのみが含められます。',
    'alpha_num'            => ':attributeは文字と数値のみが含められます。',
    'array'                => ':attributeは配列である必要があります。',
    'before'               => ':attributeは:date以前である必要があります。',
    'between'              => [
        'numeric' => ':attributeは:min〜:maxである必要があります。',
        'file'    => ':attributeは:min〜:maxキロバイトである必要があります。',
        'string'  => ':attributeは:min〜:max文字である必要があります。',
        'array'   => ':attributeは:min〜:max個である必要があります。',
    ],
    'boolean'              => ':attributeはtrueまたはfalseである必要があります。',
    'confirmed'            => ':attributeの確認が一致しません。',
    'date'                 => ':attributeは正しい日時ではありません。',
    'date_format'          => ':attributeが:formatのフォーマットと一致しません。',
    'different'            => ':attributeと:otherは異なる必要があります。',
    'digits'               => ':attributeは:digitsデジットである必要があります。',
    'digits_between'       => ':attributeは:min〜:maxである必要があります。',
    'email'                => ':attributeは正しいEメールアドレスである必要があります。',
    'ends_with' => ':attributeは次のいずれかで終わる必要があります: :values',
    'filled'               => ':attributeは必須です。',
    'gt'                   => [
        'numeric' => ':attributeは:valueより大きい必要があります。',
        'file'    => ':attributeは:value KBより大きい必要があります。',
        'string'  => ':attributeは:value文字より長い必要があります。',
        'array'   => ':attributeは:valueより多くの要素を持つ必要があります。',
    ],
    'gte'                  => [
        'numeric' => ':attributeは:value以上である必要があります。',
        'file'    => ':attributeは:value KB以上である必要があります。',
        'string'  => ':attributeは:value文字以上である必要があります。',
        'array'   => ':attributeは:value以上の要素を持つ必要があります。',
    ],
    'exists'               => '選択された:attributeは不正です。',
    'image'                => ':attributeは画像である必要があります。',
    'image_extension'      => ':attributeは有効かつサポートされている画像の拡張子を持つ必要があります。',
    'in'                   => '選択された:attributeは不正です。',
    'integer'              => ':attributeは数値である必要があります。',
    'ip'                   => ':attributeは正しいIPアドレスである必要があります。',
    'ipv4'                 => ':attributeは正しいIPv4アドレスである必要があります。',
    'ipv6'                 => ':attributeは正しいIPv6アドレスである必要があります。',
    'json'                 => ':attributeは有効なJSON文字列である必要があります。',
    'lt'                   => [
        'numeric' => ':attributeは:valueより小さい必要があります。',
        'file'    => ':attributeは:value KBより小さい必要があります。',
        'string'  => ':attributeは:value文字より短い必要があります。',
        'array'   => ':attributeは:valueより少ない要素を持つ必要があります。',
    ],
    'lte'                  => [
        'numeric' => ':attributeは:value以下である必要があります。',
        'file'    => ':attributeは:value KB以下である必要があります。',
        'string'  => ':attributeは:value文字以下である必要があります。',
        'array'   => ':attributeは:value以下の要素を持つ必要があります。',
    ],
    'max'                  => [
        'numeric' => ':attributeは:maxを越えることができません。',
        'file'    => ':attributeは:maxキロバイトを越えることができません。',
        'string'  => ':attributeは:max文字をこえることができません。',
        'array'   => ':attributeは:max個を越えることができません。',
    ],
    'mimes'                => ':attributeのファイルタイプは以下のみが許可されています: :values.',
    'min'                  => [
        'numeric' => ':attributeは:min以上である必要があります。',
        'file'    => ':attributeは:minキロバイト以上である必要があります。',
        'string'  => ':attributeは:min文字以上である必要があります。',
        'array'   => ':attributeは:min個以上である必要があります。',
    ],
    'no_double_extension'  => ':attributeは拡張子をひとつだけ持つ必要があります。',
    'not_in'               => '選択された:attributeは不正です。',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attributeは数値である必要があります。',
    'regex'                => ':attributeのフォーマットは不正です。',
    'required'             => ':attributeは必須です。',
    'required_if'          => ':otherが:valueである場合、:attributeは必須です。',
    'required_with'        => ':valuesが設定されている場合、:attributeは必須です。',
    'required_with_all'    => ':valuesが設定されている場合、:attributeは必須です。',
    'required_without'     => ':valuesが設定されていない場合、:attributeは必須です。',
    'required_without_all' => ':valuesが設定されていない場合、:attributeは必須です。',
    'same'                 => ':attributeと:otherは一致している必要があります。',
    'size'                 => [
        'numeric' => ':attributeは:sizeである必要があります。',
        'file'    => ':attributeは:sizeキロバイトである必要があります。',
        'string'  => ':attributeは:size文字である必要があります。',
        'array'   => ':attributeは:size個である必要があります。',
    ],
    'string'               => ':attributeは文字列である必要があります。',
    'timezone'             => ':attributeは正しいタイムゾーンである必要があります。',
    'unique'               => ':attributeは既に使用されています。',
    'url'                  => ':attributeのフォーマットは不正です。',
    'uploaded'             => 'ファイルがアップロードできませんでした。このファイルサイズのファイルをサーバが許可していない可能性があります。',

    // Custom validation lines
    'custom' => [
        'password-confirm' => [
            'required_with' => 'パスワードの確認は必須です。',
        ],
    ],

    // Custom validation attributes
    'attributes' => [],
];
