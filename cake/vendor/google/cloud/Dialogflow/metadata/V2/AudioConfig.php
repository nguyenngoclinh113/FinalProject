<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class AudioConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af70c0a2d676f6f676c652f636c6f75642f6469616c6f67666c6f772f76" .
            "322f617564696f5f636f6e6669672e70726f746f121a676f6f676c652e63" .
            "6c6f75642e6469616c6f67666c6f772e763222e4010a10496e7075744175" .
            "64696f436f6e66696712410a0e617564696f5f656e636f64696e67180120" .
            "01280e32292e676f6f676c652e636c6f75642e6469616c6f67666c6f772e" .
            "76322e417564696f456e636f64696e6712190a1173616d706c655f726174" .
            "655f686572747a18022001280512150a0d6c616e67756167655f636f6465" .
            "18032001280912140a0c7068726173655f68696e74731804200328091245" .
            "0a0d6d6f64656c5f76617269616e74180a2001280e322e2e676f6f676c65" .
            "2e636c6f75642e6469616c6f67666c6f772e76322e5370656563684d6f64" .
            "656c56617269616e7422660a14566f69636553656c656374696f6e506172" .
            "616d73120c0a046e616d6518012001280912400a0b73736d6c5f67656e64" .
            "657218022001280e322b2e676f6f676c652e636c6f75642e6469616c6f67" .
            "666c6f772e76322e53736d6c566f69636547656e64657222b3010a165379" .
            "6e74686573697a65537065656368436f6e66696712150a0d737065616b69" .
            "6e675f72617465180120012801120d0a0570697463681802200128011216" .
            "0a0e766f6c756d655f6761696e5f6462180320012801121a0a1265666665" .
            "6374735f70726f66696c655f6964180520032809123f0a05766f69636518" .
            "042001280b32302e676f6f676c652e636c6f75642e6469616c6f67666c6f" .
            "772e76322e566f69636553656c656374696f6e506172616d7322cd010a11" .
            "4f7574707574417564696f436f6e66696712470a0e617564696f5f656e63" .
            "6f64696e6718012001280e322f2e676f6f676c652e636c6f75642e646961" .
            "6c6f67666c6f772e76322e4f7574707574417564696f456e636f64696e67" .
            "12190a1173616d706c655f726174655f686572747a18022001280512540a" .
            "1873796e74686573697a655f7370656563685f636f6e6669671803200128" .
            "0b32322e676f6f676c652e636c6f75642e6469616c6f67666c6f772e7632" .
            "2e53796e74686573697a65537065656368436f6e6669672afb010a0d4175" .
            "64696f456e636f64696e67121e0a1a415544494f5f454e434f44494e475f" .
            "554e5350454349464945441000121c0a18415544494f5f454e434f44494e" .
            "475f4c494e4541525f3136100112170a13415544494f5f454e434f44494e" .
            "475f464c4143100212180a14415544494f5f454e434f44494e475f4d554c" .
            "4157100312160a12415544494f5f454e434f44494e475f414d5210041219" .
            "0a15415544494f5f454e434f44494e475f414d525f57421005121b0a1741" .
            "5544494f5f454e434f44494e475f4f47475f4f505553100612290a254155" .
            "44494f5f454e434f44494e475f53504545585f574954485f484541444552" .
            "5f4259544510072a760a125370656563684d6f64656c56617269616e7412" .
            "240a205350454543485f4d4f44454c5f56415249414e545f554e53504543" .
            "4946494544100012160a125553455f424553545f415641494c41424c4510" .
            "0112100a0c5553455f5354414e44415244100212100a0c5553455f454e48" .
            "414e43454410032a8d010a0f53736d6c566f69636547656e64657212210a" .
            "1d53534d4c5f564f4943455f47454e4445525f554e535045434946494544" .
            "1000121a0a1653534d4c5f564f4943455f47454e4445525f4d414c451001" .
            "121c0a1853534d4c5f564f4943455f47454e4445525f46454d414c451002" .
            "121d0a1953534d4c5f564f4943455f47454e4445525f4e45555452414c10" .
            "032aa4010a134f7574707574417564696f456e636f64696e6712250a214f" .
            "55545055545f415544494f5f454e434f44494e475f554e53504543494649" .
            "4544100012230a1f4f55545055545f415544494f5f454e434f44494e475f" .
            "4c494e4541525f31361001121d0a194f55545055545f415544494f5f454e" .
            "434f44494e475f4d5033100212220a1e4f55545055545f415544494f5f45" .
            "4e434f44494e475f4f47475f4f5055531003429f010a1e636f6d2e676f6f" .
            "676c652e636c6f75642e6469616c6f67666c6f772e76324210417564696f" .
            "436f6e66696750726f746f50015a44676f6f676c652e676f6c616e672e6f" .
            "72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f64" .
            "69616c6f67666c6f772f76323b6469616c6f67666c6f77f80101a2020244" .
            "46aa021a476f6f676c652e436c6f75642e4469616c6f67666c6f772e5632" .
            "620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

