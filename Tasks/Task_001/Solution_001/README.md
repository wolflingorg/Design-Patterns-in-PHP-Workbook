# Solution # 1

### Proxy pattern

Since a virtual proxy can be used as a placeholder for "expensive to create" objects or operations we can use it for our case. 

Image size calculation is a very expensive operation. We will create a virtual proxy (ImageInfoProxy) that will decide is it required to run the original calculation process (ImageInfo), or to get image size from its name.

### Adapter pattern
Since we don't know which graphic library we can use, we will create Adapters for it (GdAdapter, ...) 

### References
https://sourcemaking.com/design_patterns/proxy