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
          无需记住臃肿的配置，没有配置也可运行。也可完全基于配置，全依您所爱！
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">易扩展</div>
        <div class="content">
          代码基于中间件模式，掌控输入输出，只要想到就能做到。
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">更智能</div>
        <div class="content">
          写的更少，做的更多。需要时再加载。
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">标准化</div>
        <div class="content">
          代码基于<a href="https://github.com/hfcorriez/fig-standards" target="_blank">PSR规范</a>，代码易读易看。
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">高性能</div>
        <div class="content">
          非C扩展框架中性能优秀，性能测试稍后放出
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">工具化</div>
        <div class="content">
          强大的命令行工具：自带服务器；生成器快速生成；数据库升级等。
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">更现代</div>
        <div class="content">
          Web和Cli下开发；Restful；Yaml/Json/Xml配置；依赖注入；事件驱动
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">超轻便</div>
        <div class="content">
          有单文件版本，require就能使用，适合快速Web开发。<a href="https://drone.io/github.com/pagon/framework/files/pack/pagon.core.php" target="_blank">前去下载</a>
        </div>
      </div>
    </li>

    <li>
      <div class="wrap">
        <div class="title">易管理</div>
        <div class="content">
          使用 <a href="http://getcomposer.org" target="_blank">Composer</a> 进行依赖管理，安装和管理依赖库很简单。
        </div>
      </div>
    </li>
    <div class="clearfix"></div>
  </ul>