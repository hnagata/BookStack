<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'リクエストされたページへの権限がありません。',
    'permissionJson' => '要求されたアクションを実行する権限がありません。',

    // Auth
    'error_user_exists_different_creds' => ':emailを持つユーザは既に存在しますが、資格情報が異なります。',
    'email_already_confirmed' => 'Eメールは既に確認済みです。ログインしてください。',
    'email_confirmation_invalid' => 'この確認トークンは無効か、または既に使用済みです。登録を再試行してください。',
    'email_confirmation_expired' => '確認トークンは有効期限切れです。確認メールを再送しました。',
    'ldap_fail_anonymous' => '匿名バインドを用いたLDAPアクセスに失敗しました',
    'ldap_fail_authed' => '識別名, パスワードを用いたLDAPアクセスに失敗しました',
    'ldap_extension_not_installed' => 'LDAP PHP extensionがインストールされていません',
    'ldap_cannot_connect' => 'LDAPサーバに接続できませんでした',
    'social_no_action_defined' => 'アクションが定義されていません',
    'social_login_bad_response' => ":socialAccountでのログイン時にエラーが発生しました: \n:error",
    'social_account_in_use' => ':socialAccountアカウントは既に使用されています。:socialAccountのオプションからログインを試行してください。',
    'social_account_email_in_use' => ':emailは既に使用されています。ログイン後、プロフィール設定から:socialAccountアカウントを接続できます。',
    'social_account_existing' => 'アカウント:socialAccountは既にあなたのプロフィールに接続されています。',
    'social_account_already_used_existing' => 'この:socialAccountアカウントは既に他のユーザが使用しています。',
    'social_account_not_used' => 'この:socialAccountアカウントはどのユーザにも接続されていません。プロフィール設定から接続できます。',
    'social_account_register_instructions' => 'まだアカウントをお持ちでない場合、:socialAccountオプションから登録できます。',
    'social_driver_not_found' => 'Social driverが見つかりません。',
    'social_driver_not_configured' => 'あなたの:socialAccount設定は正しく構成されていません。',
    'invite_token_expired' => 'この招待リンクは期限切れです。アカウントのパスワードをリセットしてください。',

    // System
    'path_not_writable' => 'ファイルパス :filePath へアップロードできませんでした。サーバ上での書き込みを許可してください。',
    'cannot_get_image_from_url' => ':url から画像を取得できませんでした。',
    'cannot_create_thumbs' => 'このサーバはサムネイルを作成できません。GD PHP extensionがインストールされていることを確認してください。',
    'server_upload_limit' => 'このサイズの画像をアップロードすることは許可されていません。ファイルサイズを小さくし、再試行してください。',
    'uploaded'  => 'このサイズのファイルをアップロードすることは許可されていません。ファイルサイズを小さくし、再試行してください。',
    'image_upload_error' => '画像アップロード時にエラーが発生しました。',
    'image_upload_type_error' => 'アップロードしている画像の形式が不正です。',
    'file_upload_timeout' => 'ファイルのアップロードがタイムアウトしました。',

    // Attachments
    'attachment_page_mismatch' => '添付を更新するページが一致しません',
    'attachment_not_found' => '添付がありません',

    // Pages
    'page_draft_autosave_fail' => '下書きの保存に失敗しました。インターネットへ接続してください。',
    'page_custom_home_deletion' => 'ホームページとして設定されているため、削除できません。',

    // Entities
    'entity_not_found' => 'エンティティが見つかりません',
    'bookshelf_not_found' => 'シェルフが見つかりません',
    'book_not_found' => 'ブックが見つかりません',
    'page_not_found' => 'ページが見つかりません',
    'chapter_not_found' => 'チャプターが見つかりません',
    'selected_book_not_found' => '選択されたブックが見つかりません',
    'selected_book_chapter_not_found' => '選択されたブック、またはチャプターが見つかりません',
    'guests_cannot_save_drafts' => 'ゲストは下書きを保存できません',

    // Users
    'users_cannot_delete_only_admin' => '唯一の管理者を削除することはできません',
    'users_cannot_delete_guest' => 'ゲストユーザを削除することはできません',

    // Roles
    'role_cannot_be_edited' => 'このロールは編集できません',
    'role_system_cannot_be_deleted' => 'このロールはシステムで管理されているため、削除できません',
    'role_registration_default_cannot_delete' => 'このロールを登録時のデフォルトに設定することはできません',
    'role_cannot_remove_only_admin' => 'このユーザは唯一の管理者です。削除する前に、別のユーザを管理者に割り当ててください。',

    // Comments
    'comment_list' => 'コメントの取得中にエラーが発生しました。',
    'cannot_add_comment_to_draft' => '下書きにコメントは追加できません。',
    'comment_add' => 'コメントの追加・更新中にエラーが発生しました。',
    'comment_delete' => 'コメントの削除中にエラーが発生しました。',
    'empty_comment' => '空のコメントは追加できません。',

    // Error pages
    '404_page_not_found' => 'ページが見つかりません',
    'sorry_page_not_found' => 'ページを見つけることができませんでした。',
    'return_home' => 'ホームに戻る',
    'error_occurred' => 'エラーが発生しました',
    'app_down' => ':appNameは現在停止しています',
    'back_soon' => '回復までしばらくお待ちください。',

];
