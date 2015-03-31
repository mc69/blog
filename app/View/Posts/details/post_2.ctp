<article id="post_content" class="" style="color: black;text-align: justify;">
   <header class="">
        <h3><?php echo $post['Post']['libelle']; ?></h3>
        <p>
            <small><?php echo $post['Post']['date_create']; ?></small>
            <?php //echo $this->Html->link('Accueil',array('controller' => 'posts', 'action' => 'index')); ?>
        </p>
    </header>   
    <div class="post_content">
        <h4>xx</h4>
        <p>
            Hashtable is synchronized (i.e. methods defined inside Hashtable), whereas HashMap is not. If you want to make a HashMap thread-safe, use Collections.synchronizedMap(map) or ConcurrentHashMap class.
            Methods inside HashTable are defined synchronized as below:
        </p>
            
        <pre class='brush: java'>
            public synchronized boolean contains(Object obj){ ... }
            public synchronized boolean containsKey(Object obj){ ... }
            public synchronized Object get(Object obj){ ... }
            public synchronized Object put(Object obj, Object obj1){ ... }
            public synchronized Object remove(Object obj){ ... }
        </pre>
        
        <p>
            Hashtable does not allow null keys or values. HashMap allows one null key (other null keys will simply overwrite first null key) and any number of null values.
        </p>
        
        <pre class="brush: java;">
                Hashtable<String, String> hashTable = new Hashtable<String, String>();
                hashTable.put(null, "value");
                //OR
                hashTable.put("key", null);

                Output:

                Exception in thread "main" java.lang.NullPointerException
                at java.util.Hashtable.hash(Unknown Source)
                at java.util.Hashtable.put(Unknown Source)
                at test.core.MapExamples.main(MapExamples.java:12)
        </pre>
        
        <p>
            
        </p>
    </div>
    <footer class="">xx</footer>
</article>