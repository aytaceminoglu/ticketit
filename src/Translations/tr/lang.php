<?php

return [

 /*
  *  Constants
  */

  'nav-active-tickets'               => 'Aktif Talepler',
  'nav-completed-tickets'            => 'Tamamlanan Talepler',

  // Tables
  'table-id'                         => '#',
  'table-subject'                    => 'Konu',
  'table-owner'                      => 'Sahip',
  'table-status'                     => 'Durum',
  'table-last-updated'               => 'Son Güncelleme',
  'table-priority'                   => 'Öncelik',
  'table-agent'                      => 'Temsilci',
  'table-category'                   => 'Kategori',

  // Datatables
  'table-decimal'                    => '',
  'table-empty'                      => 'Tabloda herhangi bir veri mevcut değil',
  'table-info'                       => '_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor',
  'table-info-empty'                 => 'Kayıt yok',
  'table-info-filtered'              => '(_MAX_ kayıt içerisinden bulunan)',
  'table-info-postfix'               => '',
  'table-thousands'                  => ',',
  'table-length-menu'                => 'Sayfada _MENU_ kayıt göster',
  'table-loading-results'            => 'Yükleniyor...',
  'table-processing'                 => 'İşleniyor...',
  'table-search'                     => 'Ara:',
  'table-zero-records'               => 'Eşleşen kayıt bulunamadı',
  'table-paginate-first'             => 'İlk',
  'table-paginate-last'              => 'Son',
  'table-paginate-next'              => 'Sonraki',
  'table-paginate-prev'              => 'Önceki',
  'table-aria-sort-asc'              => ': artan sütun sıralamasını aktifleştir',
  'table-aria-sort-desc'             => ': azalan sütun sıralamasını aktifleştir',

  'btn-back'                         => 'Geri',
  'btn-cancel'                       => 'İptal', // NEW
  'btn-close'                        => 'Kapat',
  'btn-delete'                       => 'Sil',
  'btn-edit'                         => 'Düzenle',
  'btn-mark-complete'                => 'Tamamlandı İşaretle',
  'btn-submit'                       => 'Gönder',

  'agent'                            => 'Temsilci',
  'category'                         => 'Kategori',
  'colon'                            => ': ',
  'comments'                         => 'Yorumlar',
  'created'                          => 'Oluşturulma Tarihi',
  'description'                      => 'Açıklama',
  'flash-x'                          => '×', // &times;
  'last-update'                      => 'Son Güncelleme',
  'no-replies'                       => 'Yanıt yok.',
  'owner'                            => 'Kullanıcı',
  'priority'                         => 'Öncelik',
  'reopen-ticket'                    => 'Yeniden aç',
  'reply'                            => 'Yanıtla',
  'responsible'                      => 'Sorumlu',
  'status'                           => 'Durum',
  'subject'                          => 'Konu',

 /*
  *  Page specific
  */

// ____
  'index-title'                      => 'Destek Sistemi Ana Sayfa',

// tickets/____
  'index-my-tickets'                 => 'Destek Taleplerim',
  'btn-create-new-ticket'            => 'Talep oluştur',
  'index-complete-none'              => 'Tamamlanan destek talebi yok',
  'index-active-check'               => 'Destek talebinizi bulamadıysanız, Aktif Talepler\'e baktığınızdan emin olun.',
  'index-active-none'                => 'Aktif destek talebi yok,',
  'index-create-new-ticket'          => 'yeni talep oluştur',
  'index-complete-check'             => 'Destek talebinizi bulamadıysanız, Tamamlanan Talepler\'e baktığınızdan emin olun.',

  'create-ticket-title'              => 'Yeni Talep Formu',
  'create-new-ticket'                => 'Yeni Talep Oluştur',
  'create-ticket-brief-issue'        => 'Destek talebinizin kısa bir özeti',
  'create-ticket-describe-issue'     => 'Sorununuzu burada ayrıntılı olarak açıklayın',

  'show-ticket-title'                => 'Destek Talebi',
  'show-ticket-js-delete'            => 'Silmek istediğinizden emin misiniz: ',
  'show-ticket-modal-delete-title'   => 'Talebi Sil',
  'show-ticket-modal-delete-message' => 'Destek talebini silmek istediğinizden emin misiniz: :subject?',

 /*
  *  Controllers
  */

// AgentsController
  'agents-are-added-to-agents'                      => ':names temsilci olarak eklendi',
  'administrators-are-added-to-administrators'      => ':names yönetici olarak eklendi', //New
  'agents-joined-categories-ok'                     => 'Kategori ilişkilendirme başarılı',
  'agents-is-removed-from-team'                     => 'Temsilciler :name temsilci kategorisinden çıkarıldı',
  'administrators-is-removed-from-team'             => 'Yöneticiler :name yönetici kategorisinden çıkarıldı', // New

// CategoriesController
  'category-name-has-been-created'   => ':name oluşturuldu!',
  'category-name-has-been-modified'  => ':name düzenlendi!',
  'category-name-has-been-deleted'   => ':name silindi!',

// PrioritiesController
  'priority-name-has-been-created'   => ':name oluşturuldu!',
  'priority-name-has-been-modified'  => ':name düzenlendi!',
  'priority-name-has-been-deleted'   => ':name silindi!',
  'priority-all-tickets-here'        => 'Tüm öncelikli talepler burada',

// StatusesController
  'status-name-has-been-created'   => ':name oluşturuldu!',
  'status-name-has-been-modified'  => ':name düzenlendi!',
  'status-name-has-been-deleted'   => ':name silindi!',
  'status-all-tickets-here'        => 'All status related tickets here',

// CommentsController
  'comment-has-been-added-ok'        => 'Yorum başarıyla eklendi.',

// NotificationsController
  'notify-new-comment-from'          => 'Yeni yorum yaptı: ',
  'notify-on'                        => ' açık ',
  'notify-status-to-complete'        => ' Tamamlandı durumuna',
  'notify-status-to'                 => ' durumuna ',
  'notify-transferred'               => ' transfer edildi ',
  'notify-to-you'                    => ' size',
  'notify-created-ticket'            => ' talep oluşturuldu ',
  'notify-updated'                   => ' güncellendi ',

 // TicketsController
  'the-ticket-has-been-created'      => 'Talep oluşturuldu!',
  'the-ticket-has-been-modified'     => 'Talep düzenlendi!',
  'the-ticket-has-been-deleted'      => ':name silindi!',
  'the-ticket-has-been-completed'    => ':name tamamlandı!',
  'the-ticket-has-been-reopened'     => ':name yeniden açıldı.',
  'you-are-not-permitted-to-do-this' => 'Bunu yapmaya yetkiniz yok!',

 /*
 *  Middlewares
 */

 //  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
  'you-are-not-permitted-to-access'     => 'Bu sayfayı görüntülemeye yetkiniz yok!',

];
