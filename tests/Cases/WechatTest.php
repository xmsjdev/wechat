<?php

declare(strict_types=1);
/**
 * This file is part of xmsjdev/wechat.
 *
 * (c) Qlantech <guanfang@changdou.vip>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace HyperfTest\Cases;

use Hyperf\Config\ConfigFactory;
use Hyperf\Context\ApplicationContext;
use Xmsjdev\Wechat\Wechat;
use function Hyperf\Support\make;

/**
 * @internal
 * @coversNothing
 */
class WechatTest extends AbstractTestCase
{
    public function testWechat()
    {
        $container = ApplicationContext::getContainer();
        $config = make(ConfigFactory::class);
        /** @var Wechat $wechat */
        $wechat = make(Wechat::class);
        $code = 'wetwetwetwetwe';
        $response = $wechat::officialAccount()->getOAuth()->userFromCode($code)->getRaw();
        $this->assertIsArray($response);
    }
}
