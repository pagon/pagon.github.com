      <h1>Hello world!</h1>
      <h2>安装</h2>
<pre><code class="lang-bash">$ composer.phar create-project pagon/pagon="dev-master" myapp
</code></pre>
      <h2>编写</h2>
<pre><code class="lang-php">$app = Pagon::create();

$app-&gt;get(&#39;/&#39;, function($req, $res){
  $res-&gt;write(&#39;Hello world&#39;);
});

$app-&gt;run();
</code></pre>

      <h2>运行</h2>
<pre><code class="lang-bash">$ ./bin/pagon serve
  Pagon serve at http://127.0.0.1:5000
</code></pre>

  <h1>功能特性</h1>

  <ul id="features">
    <li>
      <div class="wrap">
        <div class="title">零配置</div>
        <div class="content">
          无需记住臃肿的配置，没有配置也可运行
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">易扩展</div>
        <div class="content">
          代码基于中间件模式，只要想到就能做到
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">更智能</div>
        <div class="content">
          写的更少，做的更多
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">标准化</div>
        <div class="content">
          代码基于<a href="https://github.com/hfcorriez/fig-standards" target="_blank">PSR规范</a>，有利于社区提交贡献代码
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">高性能</div>
        <div class="content">
          非C扩展框架中性能突出，性能测试稍后放出
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">工具化</div>
        <div class="content">
          有专门的辅助命令行工具：支持生成器；支持模拟Web运行；自带服务器等。正在进行中...
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">更现代</div>
        <div class="content">
          同时支持Web和Cli下开发；支持Restful；支持Yaml/Json/Xml配置；支持依赖注入；事件驱动
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">单文件</div>
        <div class="content">
          单文件版本，require就能使用，适合快速Web开发。<a href="https://drone.io/github.com/pagon/framework/files/pack/pagon.core.php" target="_blank">前去下载</a>
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">易管理</div>
        <div class="content">
          使用<a href="http://getcomposer.org" target="_blank">Composer</a>进行依赖管理，安装和管理依赖更简单
        </div>
      </div>
    </li>
    <div class="clear"></div>
  </ul>