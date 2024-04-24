require 'mail'
# Set up SMTP settings
Mail.defaults do
  delivery_method :smtp, {
    address: 'smtp.gmail.com',
    port: 587,
    user_name: 'atharva0bokade@gmail.com',
    password: 'yeal ydpg jjka atbx',
    authentication: :login,
    enable_starttls_auto: true
  }
end

# Define email message
message = Mail.new do
  from 'atharva0bokade@gmail.com'
  to 'sahilbomble007@gmail.com'
  subject 'Ruby message'
  body 'Hello vedant'
end

# Send email
message.deliver!
