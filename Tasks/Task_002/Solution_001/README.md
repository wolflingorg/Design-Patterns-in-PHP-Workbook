# Solution # 1

### Decorator pattern

Since we have too many options of how to file can be saved, it would be better to use decorator pattern.

The main idea is to have a possibility of mixing up different decorators dynamically in order to handle different cases. It will help us to prevent hard coding of any predefined options.

In addition to that, we will be able to add other compress methods without changing existed and tested classes.

For example, SimpleObjectReader will be able to get an object that was serialised and simply saved as a text. The mix of SimpleObjectReader, UnBase64Decorator and UnGZIPDecorator will give an opportunity to handle the more complicated variant.

### References
https://sourcemaking.com/design_patterns/decorator