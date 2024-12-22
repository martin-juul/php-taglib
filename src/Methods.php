<?php
/**
 * This file is generated! Do not edit directly.
 */

declare(strict_types=1);

namespace MartinJuul\TagLib;

trait Methods
{
    abstract public static function getFFI(): \FFI;

    /**
     * @param int|null $unicode int
     */
    public static function taglib_set_strings_unicode(?int $unicode): void
    {
        static::getFFI()->taglib_set_strings_unicode($unicode);
    }

    /**
     * @param int|null $management int
     */
    public static function taglib_set_string_management_enabled(?int $management): void
    {
        static::getFFI()->taglib_set_string_management_enabled($management);
    }

    /**
     * @param \FFI\CData|object|string|null $pointer void*
     */
    public static function taglib_free($pointer): void
    {
        static::getFFI()->taglib_free($pointer);
    }

    /**
     * @param string|null $data const char*
     * @param int|null $size unsigned int
     * @return \FFI\CData|null TagLib_IOStream*
     */
    public static function taglib_memory_iostream_new(?string $data, ?int $size): ?\FFI\CData
    {
        return static::getFFI()->taglib_memory_iostream_new($data, $size);
    }

    /**
     * @param \FFI\CData|null $stream TagLib_IOStream*
     */
    public static function taglib_iostream_free(?\FFI\CData $stream): void
    {
        static::getFFI()->taglib_iostream_free($stream);
    }

    /**
     * @param string|null $filename const char*
     * @return \FFI\CData|null TagLib_File*
     */
    public static function taglib_file_new(?string $filename): ?\FFI\CData
    {
        return static::getFFI()->taglib_file_new($filename);
    }

    /**
     * @param string|null $filename const char*
     * @param int $type TagLib_File_Type
     * @return \FFI\CData|null TagLib_File*
     */
    public static function taglib_file_new_type(?string $filename, int $type): ?\FFI\CData
    {
        return static::getFFI()->taglib_file_new_type($filename, $type);
    }

    /**
     * @param \FFI\CData|null $stream TagLib_IOStream*
     * @return \FFI\CData|null TagLib_File*
     */
    public static function taglib_file_new_iostream(?\FFI\CData $stream): ?\FFI\CData
    {
        return static::getFFI()->taglib_file_new_iostream($stream);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     */
    public static function taglib_file_free(?\FFI\CData $file): void
    {
        static::getFFI()->taglib_file_free($file);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @return int|null int
     */
    public static function taglib_file_is_valid(?\FFI\CData $file): ?int
    {
        return static::getFFI()->taglib_file_is_valid($file);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @return \FFI\CData|null TagLib_Tag*
     */
    public static function taglib_file_tag(?\FFI\CData $file): ?\FFI\CData
    {
        return static::getFFI()->taglib_file_tag($file);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @return \FFI\CData|null const TagLib_AudioProperties*
     */
    public static function taglib_file_audioproperties(?\FFI\CData $file): ?\FFI\CData
    {
        return static::getFFI()->taglib_file_audioproperties($file);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     * @return int|null int
     */
    public static function taglib_file_save(?\FFI\CData $file): ?int
    {
        return static::getFFI()->taglib_file_save($file);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return \FFI\CData|null char*
     */
    public static function taglib_tag_title(?\FFI\CData $tag): ?\FFI\CData
    {
        return static::getFFI()->taglib_tag_title($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return \FFI\CData|null char*
     */
    public static function taglib_tag_artist(?\FFI\CData $tag): ?\FFI\CData
    {
        return static::getFFI()->taglib_tag_artist($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return \FFI\CData|null char*
     */
    public static function taglib_tag_album(?\FFI\CData $tag): ?\FFI\CData
    {
        return static::getFFI()->taglib_tag_album($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return \FFI\CData|null char*
     */
    public static function taglib_tag_comment(?\FFI\CData $tag): ?\FFI\CData
    {
        return static::getFFI()->taglib_tag_comment($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return \FFI\CData|null char*
     */
    public static function taglib_tag_genre(?\FFI\CData $tag): ?\FFI\CData
    {
        return static::getFFI()->taglib_tag_genre($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return int|null unsigned int
     */
    public static function taglib_tag_year(?\FFI\CData $tag): ?int
    {
        return static::getFFI()->taglib_tag_year($tag);
    }

    /**
     * @param \FFI\CData|null $tag const TagLib_Tag*
     * @return int|null unsigned int
     */
    public static function taglib_tag_track(?\FFI\CData $tag): ?int
    {
        return static::getFFI()->taglib_tag_track($tag);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param string|null $title const char*
     */
    public static function taglib_tag_set_title(?\FFI\CData $tag, ?string $title): void
    {
        static::getFFI()->taglib_tag_set_title($tag, $title);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param string|null $artist const char*
     */
    public static function taglib_tag_set_artist(?\FFI\CData $tag, ?string $artist): void
    {
        static::getFFI()->taglib_tag_set_artist($tag, $artist);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param string|null $album const char*
     */
    public static function taglib_tag_set_album(?\FFI\CData $tag, ?string $album): void
    {
        static::getFFI()->taglib_tag_set_album($tag, $album);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param string|null $comment const char*
     */
    public static function taglib_tag_set_comment(?\FFI\CData $tag, ?string $comment): void
    {
        static::getFFI()->taglib_tag_set_comment($tag, $comment);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param string|null $genre const char*
     */
    public static function taglib_tag_set_genre(?\FFI\CData $tag, ?string $genre): void
    {
        static::getFFI()->taglib_tag_set_genre($tag, $genre);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param int|null $year unsigned int
     */
    public static function taglib_tag_set_year(?\FFI\CData $tag, ?int $year): void
    {
        static::getFFI()->taglib_tag_set_year($tag, $year);
    }

    /**
     * @param \FFI\CData|null $tag TagLib_Tag*
     * @param int|null $track unsigned int
     */
    public static function taglib_tag_set_track(?\FFI\CData $tag, ?int $track): void
    {
        static::getFFI()->taglib_tag_set_track($tag, $track);
    }

    public static function taglib_tag_free_strings(): void
    {
        static::getFFI()->taglib_tag_free_strings();
    }

    /**
     * @param \FFI\CData|null $audioProperties const TagLib_AudioProperties*
     * @return int|null int
     */
    public static function taglib_audioproperties_length(?\FFI\CData $audioProperties): ?int
    {
        return static::getFFI()->taglib_audioproperties_length($audioProperties);
    }

    /**
     * @param \FFI\CData|null $audioProperties const TagLib_AudioProperties*
     * @return int|null int
     */
    public static function taglib_audioproperties_bitrate(?\FFI\CData $audioProperties): ?int
    {
        return static::getFFI()->taglib_audioproperties_bitrate($audioProperties);
    }

    /**
     * @param \FFI\CData|null $audioProperties const TagLib_AudioProperties*
     * @return int|null int
     */
    public static function taglib_audioproperties_samplerate(?\FFI\CData $audioProperties): ?int
    {
        return static::getFFI()->taglib_audioproperties_samplerate($audioProperties);
    }

    /**
     * @param \FFI\CData|null $audioProperties const TagLib_AudioProperties*
     * @return int|null int
     */
    public static function taglib_audioproperties_channels(?\FFI\CData $audioProperties): ?int
    {
        return static::getFFI()->taglib_audioproperties_channels($audioProperties);
    }

    /**
     * @param int $encoding TagLib_ID3v2_Encoding
     */
    public static function taglib_id3v2_set_default_text_encoding(int $encoding): void
    {
        static::getFFI()->taglib_id3v2_set_default_text_encoding($encoding);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     * @param string|null $prop const char*
     * @param string|null $value const char*
     */
    public static function taglib_property_set(?\FFI\CData $file, ?string $prop, ?string $value): void
    {
        static::getFFI()->taglib_property_set($file, $prop, $value);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     * @param string|null $prop const char*
     * @param string|null $value const char*
     */
    public static function taglib_property_set_append(?\FFI\CData $file, ?string $prop, ?string $value): void
    {
        static::getFFI()->taglib_property_set_append($file, $prop, $value);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @return \FFI\CData|null char**
     */
    public static function taglib_property_keys(?\FFI\CData $file): ?\FFI\CData
    {
        return static::getFFI()->taglib_property_keys($file);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @param string|null $prop const char*
     * @return \FFI\CData|null char**
     */
    public static function taglib_property_get(?\FFI\CData $file, ?string $prop): ?\FFI\CData
    {
        return static::getFFI()->taglib_property_get($file, $prop);
    }

    /**
     * @param \FFI\CData|null $props char**
     */
    public static function taglib_property_free(?\FFI\CData $props): void
    {
        static::getFFI()->taglib_property_free($props);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     * @param string|null $key const char*
     * @param \FFI\CData|null $value const TagLib_Complex_Property_Attribute**
     * @return int|null int
     */
    public static function taglib_complex_property_set(?\FFI\CData $file, ?string $key, ?\FFI\CData $value): ?int
    {
        return static::getFFI()->taglib_complex_property_set($file, $key, $value);
    }

    /**
     * @param \FFI\CData|null $file TagLib_File*
     * @param string|null $key const char*
     * @param \FFI\CData|null $value const TagLib_Complex_Property_Attribute**
     * @return int|null int
     */
    public static function taglib_complex_property_set_append(?\FFI\CData $file, ?string $key, ?\FFI\CData $value): ?int
    {
        return static::getFFI()->taglib_complex_property_set_append($file, $key, $value);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @return \FFI\CData|null char**
     */
    public static function taglib_complex_property_keys(?\FFI\CData $file): ?\FFI\CData
    {
        return static::getFFI()->taglib_complex_property_keys($file);
    }

    /**
     * @param \FFI\CData|null $file const TagLib_File*
     * @param string|null $key const char*
     * @return \FFI\CData|null TagLib_Complex_Property_Attribute***
     */
    public static function taglib_complex_property_get(?\FFI\CData $file, ?string $key): ?\FFI\CData
    {
        return static::getFFI()->taglib_complex_property_get($file, $key);
    }

    /**
     * @param \FFI\CData|null $properties TagLib_Complex_Property_Attribute***
     * @param \FFI\CData|null $picture TagLib_Complex_Property_Picture_Data*
     */
    public static function taglib_picture_from_complex_property(?\FFI\CData $properties, ?\FFI\CData $picture): void
    {
        static::getFFI()->taglib_picture_from_complex_property($properties, $picture);
    }

    /**
     * @param \FFI\CData|null $keys char**
     */
    public static function taglib_complex_property_free_keys(?\FFI\CData $keys): void
    {
        static::getFFI()->taglib_complex_property_free_keys($keys);
    }

    /**
     * @param \FFI\CData|null $props TagLib_Complex_Property_Attribute***
     */
    public static function taglib_complex_property_free(?\FFI\CData $props): void
    {
        static::getFFI()->taglib_complex_property_free($props);
    }
}
