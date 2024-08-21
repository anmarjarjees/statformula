<?php echo heading($pageH1, 1, "class=NotDeclared"); ?>

<h2>Arithmetic Mean (AM)</h2>
<p>The arithmetic mean (or simply "mean") of a sample \( x_1, x_2, \ldots, x_n \) is the sum of the sampled values divided by the number of items in the sample:</p>
<p>Visit the
    <a href="http://en.wikipedia.org/wiki/Mean" target="_blank" title="Mean page on Wikipedia">Mean page on Wikipedia</a>
    for more details.
</p>

<h2>The Median</h2>

<h3>For an Odd Number of Values</h3>
<p>
    As an example, let's calculate the sample median for the following set of observations: 1, 5, 2, 8, 7.
</p>
<p>
    Start by sorting the values: 1, 2, 5, 7, 8.
</p>
<p>
    In this case, the median is 5, as it is the middle observation in the ordered list.
</p>
<p>
    The median is the \(\left(\frac{n + 1}{2}\right)\)th item, where \( n \) is the number of values. For the list {1, 2, 5, 7, 8}, \( n = 5 \), so the median is the \(\left(\frac{5 + 1}{2}\right)\)th item. Thus, the median is the 3rd item, which is 5.
</p>

<h3>For an Even Number of Values</h3>
<p>
    As an example, let's calculate the sample median for the following set of observations: 1, 6, 2, 8, 7, 2.
</p>
<p>
    Start by sorting the values: 1, 2, 2, 6, 7, 8.
</p>
<p>
    In this case, the median is the arithmetic mean of the two middlemost terms. Thus, the median is \(\frac{2 + 6}{2} = 4\), as it is the mean of the middle observations in the ordered list.
</p>
<p>
    The formula for the median in an even-numbered list is \(\text{Median} = \frac{\text{(n + 1)}}{2}\)th item. For the list {1, 2, 2, 6, 7, 8}, \( n = 6 \). Therefore, the median is the average of the 3rd and 4th numbers, which is \(\frac{2 + 6}{2} = 4\).
</p>
<p>Visit the
    <a href="http://en.wikipedia.org/wiki/Median" target="_blank" title="Median page on Wikipedia">Median page on Wikipedia</a>
    for more details.
</p>

<h2>The Standard Deviation</h2>
<p>
    The standard deviation (SD) (represented by the Greek letter sigma, \( \sigma \)) measures the amount of variation or dispersion from the average.
</p>
<p>
    <img class="imgLeft" src="../images/sd.png" alt="Standard Deviation Formula" />
    In other words, the standard deviation \( \sigma \) is the square root of the variance of \( X \); it is the square root of the average value of \((X - \mu)^2\), where \( \mu \) is the mean. When \( X \) takes random values from a finite data set \( x_1, x_2, \ldots, x_N \), with each value having the same probability, the standard deviation quantifies the amount of variation.
</p>
<p>Visit the
    <a href="http://en.wikipedia.org/wiki/Standard_deviation" target="_blank" title="Standard Deviation page on Wikipedia">Standard Deviation page on Wikipedia</a>
    for more details.
</p>

<h2>The Variance</h2>
<p>
    Variance measures how far a set of numbers is spread out. 
    <img class="imgRight" src="../images/variance.png" alt="Variance Formula" />
    A variance of zero indicates that all values are identical. Variance is always non-negative: a small variance indicates that the data points tend to be very close to the mean (expected value) and to each other, while a high variance indicates that the data points are more spread out around the mean and from each other.
</p>
