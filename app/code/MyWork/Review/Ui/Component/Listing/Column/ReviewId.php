<?php
namespace MyWork\Review\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class ReviewId extends Column
{
    public function prepareDataSource(array $dataSource)
    {
        // if (isset($dataSource['data']['items'])) {
        //     foreach ($dataSource['data']['items'] as & $item) {
        //         // Modify data as needed
        //         $item[$this->getData('name')] = '<a href="' . $this->getContext()->getUrl('your_controller_path/edit', ['id' => $item['review_id']]) . '">' . $item['review_id'] . '</a>';
        //     }
        // }
        // Log or echo $dataSource here
        print_r($dataSource);
        return $dataSource;
    }
    
}
