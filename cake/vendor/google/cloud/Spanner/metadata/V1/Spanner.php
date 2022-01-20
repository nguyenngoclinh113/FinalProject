<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace GPBMetadata\Google\Spanner\V1;

class Spanner
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        \GPBMetadata\Google\Spanner\V1\Mutation::initOnce();
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        \GPBMetadata\Google\Spanner\V1\Transaction::initOnce();
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a942f0a1f676f6f676c652f7370616e6e65722f76312f7370616e6e6572" .
            "2e70726f746f1211676f6f676c652e7370616e6e65722e76311a1b676f6f" .
            "676c652f70726f746f6275662f656d7074792e70726f746f1a1c676f6f67" .
            "6c652f70726f746f6275662f7374727563742e70726f746f1a1f676f6f67" .
            "6c652f70726f746f6275662f74696d657374616d702e70726f746f1a1767" .
            "6f6f676c652f7270632f7374617475732e70726f746f1a1c676f6f676c65" .
            "2f7370616e6e65722f76312f6b6579732e70726f746f1a20676f6f676c65" .
            "2f7370616e6e65722f76312f6d75746174696f6e2e70726f746f1a22676f" .
            "6f676c652f7370616e6e65722f76312f726573756c745f7365742e70726f" .
            "746f1a23676f6f676c652f7370616e6e65722f76312f7472616e73616374" .
            "696f6e2e70726f746f1a1c676f6f676c652f7370616e6e65722f76312f74" .
            "7970652e70726f746f22550a1443726561746553657373696f6e52657175" .
            "65737412100a086461746162617365180120012809122b0a077365737369" .
            "6f6e18022001280b321a2e676f6f676c652e7370616e6e65722e76312e53" .
            "657373696f6e22ee010a0753657373696f6e120c0a046e616d6518012001" .
            "280912360a066c6162656c7318022003280b32262e676f6f676c652e7370" .
            "616e6e65722e76312e53657373696f6e2e4c6162656c73456e747279122f" .
            "0a0b6372656174655f74696d6518032001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d70123d0a19617070726f78696d61" .
            "74655f6c6173745f7573655f74696d6518042001280b321a2e676f6f676c" .
            "652e70726f746f6275662e54696d657374616d701a2d0a0b4c6162656c73" .
            "456e747279120b0a036b6579180120012809120d0a0576616c7565180220" .
            "0128093a02380122210a1147657453657373696f6e52657175657374120c" .
            "0a046e616d65180120012809225e0a134c69737453657373696f6e735265" .
            "717565737412100a08646174616261736518012001280912110a09706167" .
            "655f73697a6518022001280512120a0a706167655f746f6b656e18032001" .
            "2809120e0a0666696c746572180420012809225d0a144c69737453657373" .
            "696f6e73526573706f6e7365122c0a0873657373696f6e7318012003280b" .
            "321a2e676f6f676c652e7370616e6e65722e76312e53657373696f6e1217" .
            "0a0f6e6578745f706167655f746f6b656e18022001280922240a1444656c" .
            "65746553657373696f6e52657175657374120c0a046e616d651801200128" .
            "0922e0030a114578656375746553716c52657175657374120f0a07736573" .
            "73696f6e180120012809123b0a0b7472616e73616374696f6e1802200128" .
            "0b32262e676f6f676c652e7370616e6e65722e76312e5472616e73616374" .
            "696f6e53656c6563746f72120b0a0373716c18032001280912270a067061" .
            "72616d7318042001280b32172e676f6f676c652e70726f746f6275662e53" .
            "747275637412490a0b706172616d5f747970657318052003280b32342e67" .
            "6f6f676c652e7370616e6e65722e76312e4578656375746553716c526571" .
            "756573742e506172616d5479706573456e74727912140a0c726573756d65" .
            "5f746f6b656e18062001280c12420a0a71756572795f6d6f646518072001" .
            "280e322e2e676f6f676c652e7370616e6e65722e76312e45786563757465" .
            "53716c526571756573742e51756572794d6f646512170a0f706172746974" .
            "696f6e5f746f6b656e18082001280c120d0a057365716e6f180920012803" .
            "1a4a0a0f506172616d5479706573456e747279120b0a036b657918012001" .
            "280912260a0576616c756518022001280b32172e676f6f676c652e737061" .
            "6e6e65722e76312e547970653a023801222e0a0951756572794d6f646512" .
            "0a0a064e4f524d414c100012080a04504c414e1001120b0a0750524f4649" .
            "4c45100222a8030a16457865637574654261746368446d6c526571756573" .
            "74120f0a0773657373696f6e180120012809123b0a0b7472616e73616374" .
            "696f6e18022001280b32262e676f6f676c652e7370616e6e65722e76312e" .
            "5472616e73616374696f6e53656c6563746f7212470a0a73746174656d65" .
            "6e747318032003280b32332e676f6f676c652e7370616e6e65722e76312e" .
            "457865637574654261746368446d6c526571756573742e53746174656d65" .
            "6e74120d0a057365716e6f1804200128031ae7010a0953746174656d656e" .
            "74120b0a0373716c18012001280912270a06706172616d7318022001280b" .
            "32172e676f6f676c652e70726f746f6275662e53747275637412580a0b70" .
            "6172616d5f747970657318032003280b32432e676f6f676c652e7370616e" .
            "6e65722e76312e457865637574654261746368446d6c526571756573742e" .
            "53746174656d656e742e506172616d5479706573456e7472791a4a0a0f50" .
            "6172616d5479706573456e747279120b0a036b657918012001280912260a" .
            "0576616c756518022001280b32172e676f6f676c652e7370616e6e65722e" .
            "76312e547970653a02380122700a17457865637574654261746368446d6c" .
            "526573706f6e736512310a0b726573756c745f7365747318012003280b32" .
            "1c2e676f6f676c652e7370616e6e65722e76312e526573756c7453657412" .
            "220a0673746174757318022001280b32122e676f6f676c652e7270632e53" .
            "746174757322480a10506172746974696f6e4f7074696f6e73121c0a1470" .
            "6172746974696f6e5f73697a655f627974657318012001280312160a0e6d" .
            "61785f706172746974696f6e7318022001280322f6020a15506172746974" .
            "696f6e517565727952657175657374120f0a0773657373696f6e18012001" .
            "2809123b0a0b7472616e73616374696f6e18022001280b32262e676f6f67" .
            "6c652e7370616e6e65722e76312e5472616e73616374696f6e53656c6563" .
            "746f72120b0a0373716c18032001280912270a06706172616d7318042001" .
            "280b32172e676f6f676c652e70726f746f6275662e537472756374124d0a" .
            "0b706172616d5f747970657318052003280b32382e676f6f676c652e7370" .
            "616e6e65722e76312e506172746974696f6e517565727952657175657374" .
            "2e506172616d5479706573456e747279123e0a11706172746974696f6e5f" .
            "6f7074696f6e7318062001280b32232e676f6f676c652e7370616e6e6572" .
            "2e76312e506172746974696f6e4f7074696f6e731a4a0a0f506172616d54" .
            "79706573456e747279120b0a036b657918012001280912260a0576616c75" .
            "6518022001280b32172e676f6f676c652e7370616e6e65722e76312e5479" .
            "70653a02380122ff010a14506172746974696f6e52656164526571756573" .
            "74120f0a0773657373696f6e180120012809123b0a0b7472616e73616374" .
            "696f6e18022001280b32262e676f6f676c652e7370616e6e65722e76312e" .
            "5472616e73616374696f6e53656c6563746f72120d0a057461626c651803" .
            "20012809120d0a05696e646578180420012809120f0a07636f6c756d6e73" .
            "180520032809122a0a076b65795f73657418062001280b32192e676f6f67" .
            "6c652e7370616e6e65722e76312e4b6579536574123e0a11706172746974" .
            "696f6e5f6f7074696f6e7318092001280b32232e676f6f676c652e737061" .
            "6e6e65722e76312e506172746974696f6e4f7074696f6e7322240a095061" .
            "72746974696f6e12170a0f706172746974696f6e5f746f6b656e18012001" .
            "280c227a0a11506172746974696f6e526573706f6e736512300a0a706172" .
            "746974696f6e7318012003280b321c2e676f6f676c652e7370616e6e6572" .
            "2e76312e506172746974696f6e12330a0b7472616e73616374696f6e1802" .
            "2001280b321e2e676f6f676c652e7370616e6e65722e76312e5472616e73" .
            "616374696f6e22f4010a0b5265616452657175657374120f0a0773657373" .
            "696f6e180120012809123b0a0b7472616e73616374696f6e18022001280b" .
            "32262e676f6f676c652e7370616e6e65722e76312e5472616e7361637469" .
            "6f6e53656c6563746f72120d0a057461626c65180320012809120d0a0569" .
            "6e646578180420012809120f0a07636f6c756d6e73180520032809122a0a" .
            "076b65795f73657418062001280b32192e676f6f676c652e7370616e6e65" .
            "722e76312e4b6579536574120d0a056c696d697418082001280312140a0c" .
            "726573756d655f746f6b656e18092001280c12170a0f706172746974696f" .
            "6e5f746f6b656e180a2001280c22620a17426567696e5472616e73616374" .
            "696f6e52657175657374120f0a0773657373696f6e18012001280912360a" .
            "076f7074696f6e7318022001280b32252e676f6f676c652e7370616e6e65" .
            "722e76312e5472616e73616374696f6e4f7074696f6e7322c2010a0d436f" .
            "6d6d697452657175657374120f0a0773657373696f6e1801200128091218" .
            "0a0e7472616e73616374696f6e5f696418022001280c480012470a167369" .
            "6e676c655f7573655f7472616e73616374696f6e18032001280b32252e67" .
            "6f6f676c652e7370616e6e65722e76312e5472616e73616374696f6e4f70" .
            "74696f6e734800122e0a096d75746174696f6e7318042003280b321b2e67" .
            "6f6f676c652e7370616e6e65722e76312e4d75746174696f6e420d0a0b74" .
            "72616e73616374696f6e22460a0e436f6d6d6974526573706f6e73651234" .
            "0a10636f6d6d69745f74696d657374616d7018012001280b321a2e676f6f" .
            "676c652e70726f746f6275662e54696d657374616d70223a0a0f526f6c6c" .
            "6261636b52657175657374120f0a0773657373696f6e1801200128091216" .
            "0a0e7472616e73616374696f6e5f696418022001280c32c6120a07537061" .
            "6e6e6572129b010a0d43726561746553657373696f6e12272e676f6f676c" .
            "652e7370616e6e65722e76312e43726561746553657373696f6e52657175" .
            "6573741a1a2e676f6f676c652e7370616e6e65722e76312e53657373696f" .
            "6e224582d3e493023f223a2f76312f7b64617461626173653d70726f6a65" .
            "6374732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a7d" .
            "2f73657373696f6e733a012a1290010a0a47657453657373696f6e12242e" .
            "676f6f676c652e7370616e6e65722e76312e47657453657373696f6e5265" .
            "71756573741a1a2e676f6f676c652e7370616e6e65722e76312e53657373" .
            "696f6e224082d3e493023a12382f76312f7b6e616d653d70726f6a656374" .
            "732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f7365" .
            "7373696f6e732f2a7d12a3010a0c4c69737453657373696f6e7312262e67" .
            "6f6f676c652e7370616e6e65722e76312e4c69737453657373696f6e7352" .
            "6571756573741a272e676f6f676c652e7370616e6e65722e76312e4c6973" .
            "7453657373696f6e73526573706f6e7365224282d3e493023c123a2f7631" .
            "2f7b64617461626173653d70726f6a656374732f2a2f696e7374616e6365" .
            "732f2a2f6461746162617365732f2a7d2f73657373696f6e731292010a0d" .
            "44656c65746553657373696f6e12272e676f6f676c652e7370616e6e6572" .
            "2e76312e44656c65746553657373696f6e526571756573741a162e676f6f" .
            "676c652e70726f746f6275662e456d707479224082d3e493023a2a382f76" .
            "312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a" .
            "2f6461746162617365732f2a2f73657373696f6e732f2a7d12a3010a0a45" .
            "78656375746553716c12242e676f6f676c652e7370616e6e65722e76312e" .
            "4578656375746553716c526571756573741a1c2e676f6f676c652e737061" .
            "6e6e65722e76312e526573756c74536574225182d3e493024b22462f7631" .
            "2f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e636573" .
            "2f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a657865" .
            "6375746553716c3a012a12be010a134578656375746553747265616d696e" .
            "6753716c12242e676f6f676c652e7370616e6e65722e76312e4578656375" .
            "746553716c526571756573741a232e676f6f676c652e7370616e6e65722e" .
            "76312e5061727469616c526573756c74536574225a82d3e4930254224f2f" .
            "76312f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e63" .
            "65732f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a65" .
            "78656375746553747265616d696e6753716c3a012a300112c0010a0f4578" .
            "65637574654261746368446d6c12292e676f6f676c652e7370616e6e6572" .
            "2e76312e457865637574654261746368446d6c526571756573741a2a2e67" .
            "6f6f676c652e7370616e6e65722e76312e45786563757465426174636844" .
            "6d6c526573706f6e7365225682d3e4930250224b2f76312f7b7365737369" .
            "6f6e3d70726f6a656374732f2a2f696e7374616e6365732f2a2f64617461" .
            "62617365732f2a2f73657373696f6e732f2a7d3a65786563757465426174" .
            "6368446d6c3a012a1291010a0452656164121e2e676f6f676c652e737061" .
            "6e6e65722e76312e52656164526571756573741a1c2e676f6f676c652e73" .
            "70616e6e65722e76312e526573756c74536574224b82d3e493024522402f" .
            "76312f7b73657373696f6e3d70726f6a656374732f2a2f696e7374616e63" .
            "65732f2a2f6461746162617365732f2a2f73657373696f6e732f2a7d3a72" .
            "6561643a012a12ac010a0d53747265616d696e6752656164121e2e676f6f" .
            "676c652e7370616e6e65722e76312e52656164526571756573741a232e67" .
            "6f6f676c652e7370616e6e65722e76312e5061727469616c526573756c74" .
            "536574225482d3e493024e22492f76312f7b73657373696f6e3d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a" .
            "2f73657373696f6e732f2a7d3a73747265616d696e67526561643a012a30" .
            "0112b7010a10426567696e5472616e73616374696f6e122a2e676f6f676c" .
            "652e7370616e6e65722e76312e426567696e5472616e73616374696f6e52" .
            "6571756573741a1e2e676f6f676c652e7370616e6e65722e76312e547261" .
            "6e73616374696f6e225782d3e4930251224c2f76312f7b73657373696f6e" .
            "3d70726f6a656374732f2a2f696e7374616e6365732f2a2f646174616261" .
            "7365732f2a2f73657373696f6e732f2a7d3a626567696e5472616e736163" .
            "74696f6e3a012a129c010a06436f6d6d697412202e676f6f676c652e7370" .
            "616e6e65722e76312e436f6d6d6974526571756573741a212e676f6f676c" .
            "652e7370616e6e65722e76312e436f6d6d6974526573706f6e7365224d82" .
            "d3e493024722422f76312f7b73657373696f6e3d70726f6a656374732f2a" .
            "2f696e7374616e6365732f2a2f6461746162617365732f2a2f7365737369" .
            "6f6e732f2a7d3a636f6d6d69743a012a1297010a08526f6c6c6261636b12" .
            "222e676f6f676c652e7370616e6e65722e76312e526f6c6c6261636b5265" .
            "71756573741a162e676f6f676c652e70726f746f6275662e456d70747922" .
            "4f82d3e493024922442f76312f7b73657373696f6e3d70726f6a65637473" .
            "2f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f736573" .
            "73696f6e732f2a7d3a726f6c6c6261636b3a012a12b7010a0e5061727469" .
            "74696f6e517565727912282e676f6f676c652e7370616e6e65722e76312e" .
            "506172746974696f6e5175657279526571756573741a242e676f6f676c65" .
            "2e7370616e6e65722e76312e506172746974696f6e526573706f6e736522" .
            "5582d3e493024f224a2f76312f7b73657373696f6e3d70726f6a65637473" .
            "2f2a2f696e7374616e6365732f2a2f6461746162617365732f2a2f736573" .
            "73696f6e732f2a7d3a706172746974696f6e51756572793a012a12b4010a" .
            "0d506172746974696f6e5265616412272e676f6f676c652e7370616e6e65" .
            "722e76312e506172746974696f6e52656164526571756573741a242e676f" .
            "6f676c652e7370616e6e65722e76312e506172746974696f6e526573706f" .
            "6e7365225482d3e493024e22492f76312f7b73657373696f6e3d70726f6a" .
            "656374732f2a2f696e7374616e6365732f2a2f6461746162617365732f2a" .
            "2f73657373696f6e732f2a7d3a706172746974696f6e526561643a012a42" .
            "95010a15636f6d2e676f6f676c652e7370616e6e65722e7631420c537061" .
            "6e6e657250726f746f50015a38676f6f676c652e676f6c616e672e6f7267" .
            "2f67656e70726f746f2f676f6f676c65617069732f7370616e6e65722f76" .
            "313b7370616e6e6572aa0217476f6f676c652e436c6f75642e5370616e6e" .
            "65722e5631ca0217476f6f676c655c436c6f75645c5370616e6e65725c56" .
            "31620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

