<?php
/**
 * This file is generated! Do not edit directly.
 */

declare(strict_types=1);

namespace MartinJuul\TagLib;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_MPEG = 0;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_OggVorbis = 1;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_FLAC = 2;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_MPC = 3;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_OggFlac = 4;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_WavPack = 5;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_Speex = 6;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_TrueAudio = 7;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_MP4 = 8;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_ASF = 9;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_AIFF = 10;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_WAV = 11;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_APE = 12;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_IT = 13;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_Mod = 14;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_S3M = 15;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_XM = 16;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_Opus = 17;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_DSF = 18;

/**
 * enum TagLib_File_Type
 */
const TagLib_File_DSDIFF = 19;

/**
 * enum TagLib_ID3v2_Encoding
 */
const TagLib_ID3v2_Latin1 = 0;

/**
 * enum TagLib_ID3v2_Encoding
 */
const TagLib_ID3v2_UTF16 = 1;

/**
 * enum TagLib_ID3v2_Encoding
 */
const TagLib_ID3v2_UTF16BE = 2;

/**
 * enum TagLib_ID3v2_Encoding
 */
const TagLib_ID3v2_UTF8 = 3;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_Void = 0;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_Bool = 1;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_Int = 2;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_UInt = 3;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_LongLong = 4;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_ULongLong = 5;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_Double = 6;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_String = 7;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_StringList = 8;

/**
 * enum TagLib_Variant_Type
 */
const TagLib_Variant_ByteVector = 9;

/**
 * taglib/tag_c.h
 */
const FFI_CDEF = 'typedef struct {
  int dummy;
} TagLib_File;
typedef struct {
  int dummy;
} TagLib_Tag;
typedef struct {
  int dummy;
} TagLib_AudioProperties;
typedef struct {
  int dummy;
} TagLib_IOStream;
__attribute__((visibility("default"))) void taglib_set_strings_unicode(int unicode);
__attribute__((visibility("default"))) void taglib_set_string_management_enabled(int management);
__attribute__((visibility("default"))) void taglib_free(void *pointer);
__attribute__((visibility("default"))) TagLib_IOStream *taglib_memory_iostream_new(const char *data, unsigned int size);
__attribute__((visibility("default"))) void taglib_iostream_free(TagLib_IOStream *stream);
typedef enum {
  TagLib_File_MPEG,
  TagLib_File_OggVorbis,
  TagLib_File_FLAC,
  TagLib_File_MPC,
  TagLib_File_OggFlac,
  TagLib_File_WavPack,
  TagLib_File_Speex,
  TagLib_File_TrueAudio,
  TagLib_File_MP4,
  TagLib_File_ASF,
  TagLib_File_AIFF,
  TagLib_File_WAV,
  TagLib_File_APE,
  TagLib_File_IT,
  TagLib_File_Mod,
  TagLib_File_S3M,
  TagLib_File_XM,
  TagLib_File_Opus,
  TagLib_File_DSF,
  TagLib_File_DSDIFF,
} TagLib_File_Type;
__attribute__((visibility("default"))) TagLib_File *taglib_file_new(const char *filename);
__attribute__((visibility("default"))) TagLib_File *taglib_file_new_type(const char *filename, TagLib_File_Type type);
__attribute__((visibility("default"))) TagLib_File *taglib_file_new_iostream(TagLib_IOStream *stream);
__attribute__((visibility("default"))) void taglib_file_free(TagLib_File *file);
__attribute__((visibility("default"))) int taglib_file_is_valid(const TagLib_File *file);
__attribute__((visibility("default"))) TagLib_Tag *taglib_file_tag(const TagLib_File *file);
__attribute__((visibility("default"))) const TagLib_AudioProperties *taglib_file_audioproperties(const TagLib_File *file);
__attribute__((visibility("default"))) int taglib_file_save(TagLib_File *file);
__attribute__((visibility("default"))) char *taglib_tag_title(const TagLib_Tag *tag);
__attribute__((visibility("default"))) char *taglib_tag_artist(const TagLib_Tag *tag);
__attribute__((visibility("default"))) char *taglib_tag_album(const TagLib_Tag *tag);
__attribute__((visibility("default"))) char *taglib_tag_comment(const TagLib_Tag *tag);
__attribute__((visibility("default"))) char *taglib_tag_genre(const TagLib_Tag *tag);
__attribute__((visibility("default"))) unsigned int taglib_tag_year(const TagLib_Tag *tag);
__attribute__((visibility("default"))) unsigned int taglib_tag_track(const TagLib_Tag *tag);
__attribute__((visibility("default"))) void taglib_tag_set_title(TagLib_Tag *tag, const char *title);
__attribute__((visibility("default"))) void taglib_tag_set_artist(TagLib_Tag *tag, const char *artist);
__attribute__((visibility("default"))) void taglib_tag_set_album(TagLib_Tag *tag, const char *album);
__attribute__((visibility("default"))) void taglib_tag_set_comment(TagLib_Tag *tag, const char *comment);
__attribute__((visibility("default"))) void taglib_tag_set_genre(TagLib_Tag *tag, const char *genre);
__attribute__((visibility("default"))) void taglib_tag_set_year(TagLib_Tag *tag, unsigned int year);
__attribute__((visibility("default"))) void taglib_tag_set_track(TagLib_Tag *tag, unsigned int track);
__attribute__((visibility("default"))) void taglib_tag_free_strings(void);
__attribute__((visibility("default"))) int taglib_audioproperties_length(const TagLib_AudioProperties *audioProperties);
__attribute__((visibility("default"))) int taglib_audioproperties_bitrate(const TagLib_AudioProperties *audioProperties);
__attribute__((visibility("default"))) int taglib_audioproperties_samplerate(const TagLib_AudioProperties *audioProperties);
__attribute__((visibility("default"))) int taglib_audioproperties_channels(const TagLib_AudioProperties *audioProperties);
typedef enum {
  TagLib_ID3v2_Latin1,
  TagLib_ID3v2_UTF16,
  TagLib_ID3v2_UTF16BE,
  TagLib_ID3v2_UTF8,
} TagLib_ID3v2_Encoding;
__attribute__((visibility("default"))) void taglib_id3v2_set_default_text_encoding(TagLib_ID3v2_Encoding encoding);
__attribute__((visibility("default"))) void taglib_property_set(TagLib_File *file, const char *prop, const char *value);
__attribute__((visibility("default"))) void taglib_property_set_append(TagLib_File *file, const char *prop, const char *value);
__attribute__((visibility("default"))) char **taglib_property_keys(const TagLib_File *file);
__attribute__((visibility("default"))) char **taglib_property_get(const TagLib_File *file, const char *prop);
__attribute__((visibility("default"))) void taglib_property_free(char **props);
typedef enum {
  TagLib_Variant_Void,
  TagLib_Variant_Bool,
  TagLib_Variant_Int,
  TagLib_Variant_UInt,
  TagLib_Variant_LongLong,
  TagLib_Variant_ULongLong,
  TagLib_Variant_Double,
  TagLib_Variant_String,
  TagLib_Variant_StringList,
  TagLib_Variant_ByteVector,
} TagLib_Variant_Type;
typedef struct {
  TagLib_Variant_Type type;
  unsigned int size;
  union {
    char *stringValue;
    char *byteVectorValue;
    char **stringListValue;
    int boolValue;
    int intValue;
    unsigned int uIntValue;
    long long longLongValue;
    unsigned long long uLongLongValue;
    double doubleValue;
  } value;
} TagLib_Variant;
typedef struct {
  char *key;
  TagLib_Variant value;
} TagLib_Complex_Property_Attribute;
typedef struct {
  char *mimeType;
  char *description;
  char *pictureType;
  char *data;
  unsigned int size;
} TagLib_Complex_Property_Picture_Data;
__attribute__((visibility("default"))) int taglib_complex_property_set(TagLib_File *file, const char *key, const TagLib_Complex_Property_Attribute **value);
__attribute__((visibility("default"))) int taglib_complex_property_set_append(TagLib_File *file, const char *key, const TagLib_Complex_Property_Attribute **value);
__attribute__((visibility("default"))) char **taglib_complex_property_keys(const TagLib_File *file);
__attribute__((visibility("default"))) TagLib_Complex_Property_Attribute ***taglib_complex_property_get(const TagLib_File *file, const char *key);
__attribute__((visibility("default"))) void taglib_picture_from_complex_property(TagLib_Complex_Property_Attribute ***properties, TagLib_Complex_Property_Picture_Data *picture);
__attribute__((visibility("default"))) void taglib_complex_property_free_keys(char **keys);
__attribute__((visibility("default"))) void taglib_complex_property_free(TagLib_Complex_Property_Attribute ***props);
';

/**
 * c library file name
 */
const FFI_LIB = 'libtag.so.2';
