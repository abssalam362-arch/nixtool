# nixtool
Complete image optimization solutions in one place

=== Nix Image Optimizer ===
Contributors: nixtool
Tags: images, webp, compression, image seo, featured image
Requires at least: 5.8
Tested up to: 7.0
Requires PHP: 7.4
Stable tag: 2.1.11
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Convert images to WebP with bulk compression, media log, watermarking, image SEO, featured image generation, and unused media cleanup.

== Description ==

Nix Image Optimizer helps optimize your WordPress media library by converting supported image uploads to WebP automatically and giving you tools to manage existing images, generate lightweight featured images, and improve image SEO metadata.

Features:

* Automatically converts new JPG, JPEG, PNG, and AVIF uploads to WebP.
* Bulk-compresses existing Media Library images.
* Shows compression statistics in a Media Log.
* Adds optional watermark support before compression.
* Generates blog-style featured images from post title, category, author name, and avatar.
* Supports custom featured image background colors, gradients, typography, and output dimensions.
* Auto-fills missing image ALT text and attachment descriptions from post content.
* Includes Basic and Advanced Image SEO Metadata modes.
* Scans and backfills existing posts with safe generated-metadata rules.
* Includes an unused media scanner and cleaner.
* Works with WordPress Media Library metadata and regeneration flow.

== Installation ==

1. Upload the `nix-image-optimizer` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` screen in WordPress.
3. Go to `Nix Image Optimizer` in the WordPress admin menu.
4. Configure your compression quality and optional watermark settings.

== Frequently Asked Questions ==

= Which image formats are supported? =

New uploads in JPG, JPEG, PNG, and AVIF format can be converted to WebP. Existing supported images can also be processed through Bulk Compress.

= Does the plugin modify existing images automatically? =

No. Existing images are only processed when you run the bulk compression or watermark rebuild tools.

= Does this plugin support watermarking? =

Yes. You can upload a watermark logo, choose the position, opacity, size, and margin, and optionally exclude specific images.

= Can I clean unused images from my Media Library? =

Yes. The plugin includes an unused media scanner and cleaner to help identify media items that are not referenced in content or common metadata.

= What does Image SEO Metadata do? =

It can fill missing image ALT text and attachment descriptions when posts are saved. Basic mode uses the post title and meta description or excerpt. Advanced mode uses nearby headings and section text for content images.

= Will Image SEO Metadata overwrite custom ALT text? =

No. Future post saves fill empty fields by default. Backfill tools separate missing, generated Basic, generated Advanced, and custom image metadata so you can safely update only the intended group.

= What format does the Featured Image Generator use? =

The Featured Image Generator saves JPEG files to keep smooth gradient output predictable between 20 KB and 60 KB.

== External services ==

This plugin can connect to the WordPress avatar system, which commonly uses Gravatar, when the Featured Image Generator is configured to include the post author's avatar.

When the avatar option is enabled, the plugin requests the author's avatar URL while showing the featured-image preview in the WordPress admin and while generating a featured image for a post or page. WordPress builds that avatar URL from the author's user account email address according to the site's normal avatar settings. The plugin downloads the avatar image from that URL so it can draw the circular author avatar into the generated featured image. If the avatar option is disabled, or if no avatar URL is available, the plugin does not request the avatar image and uses a local placeholder shape instead.

The avatar service is provided by Gravatar/Automattic:
Terms of Service: https://wordpress.com/tos/
Privacy Policy: https://automattic.com/privacy/

== Screenshots ==

1. Settings tab with WebP quality controls.
2. Media Log showing compressed image statistics.
3. Bulk Compress progress interface.
4. Watermark settings and rebuild tools.
5. Unused Media Scanner and Cleaner.
6. Image SEO Metadata settings and backfill tools.
7. Featured Image Generator settings and post editor button.

== Changelog ==

= 2.1.11 =

* Confirmed compatibility with WordPress 7.0.
* Improved Featured Image Generator author fallback to use the post author, current user, or site name instead of plugin placeholder text.
* Bundled Noto Sans Bengali and improved multilingual font lookup for generated featured images.
* Improved generated text handling so Bangla/non-English text does not fall back to broken bitmap output.

= 2.1.10 =

* Documented the optional Gravatar/WordPress avatar request used by the Featured Image Generator.
* Updated the WordPress core fonts path lookup to use the WordPress core include directory constant.

= 2.1.9 =

* Improved WordPress.org review compatibility and shortened the readme short description.
* Updated Featured Image Generator to stay focused on posts and pages, with post-first preview data.
* Improved generated category badge fitting for longer category names.
* Hardened request sanitization for admin AJAX actions.

= 2.1.8 =

* Updated Featured Image Generator output to JPEG with a 20 KB to 60 KB size window for cleaner gradients.

= 2.1.7 =

* Fixed generated featured image file-size reporting after target padding and improved gradient texture.

= 2.1.6 =

* Added target-size padding for generated featured images when the optimized file is naturally smaller than the configured size.

= 2.1.5 =

* Updated Featured Image Generator output saving to choose the closest available quality to the target file size.

= 2.1.4 =

* Improved Featured Image Generator gradient quality and avoided overly aggressive compression.

= 2.1.3 =

* Tweaked Featured Image Generator output proportions to match the live preview more closely.

= 2.1.2 =

* Improved generated featured image styling to better match the live preview.

= 2.1.1 =

* Added a latest-post live preview and accordion settings panel for the Featured Image Generator.

= 2.1.0 =

* Added Featured Image Generator for posts and pages.
* Added generator settings for size, target file size, gradient, colors, typography, badge, and avatar display.
* Added post and page editor button to generate and assign a featured image.

= 2.0.11 =

* Shortened the admin tab label for Image SEO.

= 2.0.10 =

* Updated Image SEO Metadata admin typography.

= 2.0.9 =

* Fixed Image SEO Metadata backfill tab switching inside the AJAX admin screen.

= 2.0.8 =

* Added Image SEO Metadata with Basic and Advanced metadata modes.
* Added existing posts scan and backfill tools for missing or generated image metadata.

= 2.0.7 =

* Improved WordPress.org submission compatibility.
* Removed custom licensing and updater logic from the public build.
* Added WordPress.org readme metadata and localization baseline updates.

== Upgrade Notice ==

= 2.1.11 =

Confirms WordPress 7.0 compatibility and improves multilingual featured image generation.

= 2.1.10 =

Documents the optional external avatar service used by the Featured Image Generator and improves WordPress.org review compatibility.

= 2.1.9 =

Improves WordPress.org review compatibility, Featured Image Generator post/page handling, and category badge fitting.

= 2.1.8 =

Featured Image Generator now outputs JPEG files in a practical 20 KB to 60 KB size window.

= 2.1.7 =

Generated featured images now refresh file-size metadata correctly after target padding.

= 2.1.6 =

Generated featured images can now stay close to the configured target size even when the visual content compresses very small.

= 2.1.5 =

Featured Image Generator now saves the quality level closest to the configured target file size.

= 2.1.4 =

Featured Image Generator now keeps gradients cleaner by avoiding very low output quality.

= 2.1.3 =

Featured Image Generator output now matches the live preview more closely.

= 2.1.2 =

Improves generated featured image output styling.

= 2.1.1 =

Improves the Featured Image Generator settings screen with live preview and accordion controls.

= 2.1.0 =

Adds the Featured Image Generator for posts and pages.

= 2.0.11 =

Shortens the Image SEO admin tab label.

= 2.0.10 =

Updates Image SEO Metadata admin typography.

= 2.0.9 =

Fixes the Image SEO Metadata backfill tab in the admin screen.

= 2.0.8 =

Adds Image SEO Metadata and safe backfill tools for existing posts.

= 2.0.7 =

Recommended update for the WordPress.org compatible public release.

