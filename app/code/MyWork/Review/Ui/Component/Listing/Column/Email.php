<?php
namespace MyWork\Review\Ui\Component\Listing\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Email extends Column
{
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                // Assuming 'email' is the field name in your database table
                $email = $item['email'];

                // You can customize the rendering logic here if needed
                // For example, you can add a link or format the email
                $item[$this->getData('name')] = '<a href="mailto:' . $email . '">' . $email . '</a>';
            }
        }

        return $dataSource;
    }
}
